<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/NewsletterProvider.php';


class Newsletter
{

    public function __construct(public NewsletterProvider $provider)
    {}

    public bool $flag = false;

    public function subscribe(User $user): void
    {
        // Tightly coupled on purpose: hard-coded provider, key, and list
        $this->flag=$this->provider->addToLists($user->email,'lists');
        
    }
}
