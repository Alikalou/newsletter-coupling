<?php

require_once __DIR__ . '/NewsletterProvider.php';

class FakeProvider implements NewsletterProvider
{
    /** @var array<int, array{0:string,1:string}> [email, listName] */
    public array $added = [];

    public function addToList(string $email, string $listName): bool
    {
        $this->added[] = [$email, $listName];
        return true;
    }

    /** @return string[] emails in the given list */
    public function getList(string $listName): array
    {
        return array_column(
            array_filter($this->added, fn($row) => $row[1] === $listName),
            0
        );
    }
}
