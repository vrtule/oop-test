<?php

class Ebook extends Book
{
    public function __construct(string $title, string $author, string $isbn, int $year, public Format $fileFormat, public int $fileSize) {
        parent::__construct($title, $author, $isbn, $year);
    }

    public function getInfo(): string
    {
        return "Název: $this->title\nAutor: $this->author\nISBN: $this->isbn\nRok vydání: $this->year\nFormát: {$this->fileFormat->value} \nVelikost souboru: $this->fileSize kb\nType: E-kniha";
    }
}