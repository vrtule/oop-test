<?php

abstract class Book
{
    public function __construct(public string $title, public string $author, public string $isbn, public int $year) {
    }

    abstract public function getInfo() : string;
}