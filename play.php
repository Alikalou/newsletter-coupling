

<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Newsletter.php';
require_once __DIR__ . '/NewsletterProvider.php';


$user = new User('alikxdx@gmail.com');


$newsletter = new Newsletter(new CampaignMonitorProvider("12345",[]));

$newsletter->subscribe($user);

echo $newsletter->flag ? "1\n" : "0\n"; // expect: 1
