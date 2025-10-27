<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/FakeProvider.php';

class NewsletterBad
{
    public bool $flag = false;

    public function subscribe(User $user): void
    {
        // Tightly coupled on purpose: hard-coded provider, key, and list
        $provider = new FakeProvider('12345', []);
        $this->flag = $provider->addUserEmail($user->email);
    }
}
