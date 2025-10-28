<?php


interface NewsletterProvider {
    
    public function addToList(string $email, string $listName):bool;
}

class CampaignMonitorProvider implements NewsletterProvider
{
    private string $api;
    private array $lists;

    public function __construct(string $api, array $lists)
    {
        $this->api  = $api;   // hard-coded in caller (tight coupling on purpose)
        $this->lists = $lists;  // start lists (e.g., empty)
    }

    public function addToList(string $email, string $list): bool
    {
        if(!isset($this->lists[$list]))
            $this->lists[$list]=[];

        $this->lists[$list][]=$email;

        // …then return a boolean indicating the email is now in the lists
        // (you could also just return true for this kata)
        return in_array($email, $this->lists[$list], true);
    }

        public function getList(string $listName): array
    {
        return $this->lists[$listName] ?? [];
    }



}


class PostmarkProvider implements NewsletterProvider
{
    private string $api;
    private array $lists;

    public function __construct(string $api, array $lists)
    {
        $this->api  = $api;   // hard-coded in caller (tight coupling on purpose)
        $this->lists = $lists;  // start lists (e.g., empty)
    }

    public function addToList(string $email, string $list): bool
    {
        if(!isset($this->lists[$list]))
            $this->lists[$list]=[];

        $this->lists[$list][]=$email;

        // …then return a boolean indicating the email is now in the lists
        // (you could also just return true for this kata)
        return in_array($email, $this->lists[$list], true);
    }

        public function getList(string $listName): array
    {
        return $this->lists[$listName] ?? [];
    }



}
