<?php

interface BookStorage
{
    public function addBook(Book $book);
    public function findBookByISBN(string $isbn);
}