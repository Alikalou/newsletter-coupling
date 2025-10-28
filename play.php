<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Newsletter.php';
require_once __DIR__ . '/NewsletterProvider.php';


$user1 = new User('alikxdx@gmail.com');

$user2 = new User('lalosalamnca@gmail.com');



$newsletter1 = new Newsletter(new CampaignMonitorProvider("12345",[]));


$newsletter2 = new Newsletter(new PostmarkProvider("54321",[]));

echo $newsletter1->subscribe($user1)."\n";
echo $newsletter1->subscribe($user2)."\n";

echo $newsletter2->subscribe($user1)."\n";
