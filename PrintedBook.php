<?php

class PrintedBook extends Book
{
    public function __construct(string $title, string $author, string $isbn, int $year, public int $numberOfPages) {
        parent::__construct($title, $author, $isbn, $year);
    }

    public function getInfo(): string
    {
        return "Název: $this->title\nAutor: $this->author\nISBN: $this->isbn\nRok vydání: $this->year\nPočet stran: $this->numberOfPages\nType: Tištěná kniha";
    }
}