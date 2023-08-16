<?php

class LibraryManager
{
    private BookStorage $bookStorage;

    public function __construct(BookStorage $bookStorage) {
        $this->bookStorage = $bookStorage;
    }

    public function addBook(Book $book): void
    {
        $this->bookStorage->addBook($book);
    }

    public function printBookInfoByISBN(string $isbn): void
    {
        $book = $this->bookStorage->findBookByISBN($isbn);
        if ($book) {
            echo $book->getInfo();
        } else {
            echo "Kniha nenalezena.";
        }
    }
}