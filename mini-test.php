<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Newsletter.php';
require_once __DIR__ . '/FakeProvider.php';

$fake = new FakeProvider();
$newsletter = new Newsletter($fake);

$user1 = new User('obi@example.com');
$user2 = new User('lara@example.com');

assert($newsletter->subscribe($user1) === true);
assert($newsletter->subscribe($user2) === true);

// Recorded calls: [$email, $listName]
assert(count($fake->added) === 2);
assert($fake->added[0] === ['obi@example.com', 'default']);
assert($fake->added[1] === ['lara@example.com', 'default']);

// Emails present in the 'default' list
$list = $fake->getList('default');
assert(in_array('obi@example.com', $list, true));
assert(in_array('lara@example.com', $list, true));

echo "✅ All assertions passed – Newsletter works with a Fake provider.\n";
