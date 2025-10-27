

<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/NewsletterBad.php';

$user = new User('alikxdx@gmail.com');
$newsletter = new NewsletterBad();

$newsletter->subscribe($user);

echo $newsletter->flag ? "1\n" : "0\n"; // expect: 1
