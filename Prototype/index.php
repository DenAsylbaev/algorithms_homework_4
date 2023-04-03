<?php

require 'Book.php';

$book1 = new Book("PHP1", 300);
$book2 = clone $book1;

$book3 = clone $book2;
$book3->title = "PHP3";

$book4 = $book3->cloneBook();
$book5 = $book3->cloneBook(150);

$book1->getInfo();
$book2->getInfo();
$book3->getInfo();
$book4->getInfo();
$book5->getInfo();

