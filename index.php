<?php

require_once 'Format.php';
require_once 'BookStorage.php';
require_once 'MemoryBookStorage.php';
require_once 'LibraryManager.php';
require_once 'Book.php';
require_once 'PrintedBook.php';
require_once 'Ebook.php';

$memoryStorage = new MemoryBookStorage();
$library = new LibraryManager($memoryStorage);

$library->addBook(new PrintedBook("1984", "George Orwell", "978-80-7309-808-7", 1949, 264));
$library->addBook(new Ebook("Farma zvířad", "George Orwell", "978-80-257-1324-2", 1945, Format::PDF, 962));

$library->printBookInfoByISBN("978-80-7309-808-7");
echo "\n";
echo "\n";
$library->printBookInfoByISBN("978-80-257-1324-2");
echo "\n";
echo "\n";
$library->printBookInfoByISBN("000");


