<?php

require_once "Soal4.php";
class Soal4UnitTest extends \PHPUnit\Framework\TestCase
{
    public function testBorrowBook()
    {
        $book = new Soal4();
        $book->setTempBookName('Book A');
        $book->borrowBook();

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('BookAlreadyLoanException Book A');
        $book->borrowBook(); // Exception: book already loaned
    }

    public function testReturnBook()
    {
        $book = new Soal4();
        $book->setTempBookName('Book A');
        $book->borrowBook();
        $book->returnBook();

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('BookIsNotOnLoanException Book A');
        $book->returnBook(); // Exception: book is not on loan
    }

    public function testAvailableBooks()
    {
        $book = new Soal4();
        $book->setTempBookName('Book A');
        $book->borrowBook();

        $this->assertEquals(['Book B', 'Book C'], array_values($book->availableBooks()));
    }
}
