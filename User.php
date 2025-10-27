

<?php

class User
{
    public string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }
}
