<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/NewsletterProvider.php';

class Newsletter
{
    public function __construct(private NewsletterProvider $provider) {}

    public function subscribe(User $user): bool
    {
        return $this->provider->addToList($user->email, 'default'); // ← single source of truth
    }
}
