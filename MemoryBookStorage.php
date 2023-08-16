<?php

class MemoryBookStorage implements BookStorage
{
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[$book->isbn] = $book;
    }

    public function findBookByISBN(string $isbn)
    {
        if (isset($this->books[$isbn])) {
            return $this->books[$isbn];
        }

        return null;
    }
}