<?php

class FakeProvider
{
    private string $api;
    private array $list;

    public function __construct(string $api, array $list)
    {
        $this->api  = $api;   // hard-coded in caller (tight coupling on purpose)
        $this->list = $list;  // start list (e.g., empty)
    }

    public function addUserEmail(string $email): bool
    {
        // append first…
        $this->list[] = $email;

        // …then return a boolean indicating the email is now in the list
        // (you could also just return true for this kata)
        return in_array($email, $this->list, true);
    }

    // Optional helper if you want to inspect state later
    public function getList(): array
    {
        return $this->list;
    }
}
