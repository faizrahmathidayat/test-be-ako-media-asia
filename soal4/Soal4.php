<?php
class Soal4
{
    private $tempBookName;
    private $booksLoanedList;
    private $books;

    public function __construct()
    {
        $this->books = ['Book A', 'Book B', 'Book C'];
        $this->booksLoanedList = [];
    }

    public function availableBooks(): array
    {
        return array_diff($this->books, $this->booksLoanedList);
    }

    public function setTempBookName($bookName)
    {
        $this->tempBookName = $bookName;
    }

    public function getIndexBook()
    {
        return array_search($this->tempBookName, $this->books);
    }

    public function isLoaned(): bool
    {
        return (in_array($this->tempBookName, $this->booksLoanedList));
    }

    public function borrowBook(): void
    {
        if (!in_array($this->tempBookName, $this->booksLoanedList)) {
            echo "Success borrow book " . $this->tempBookName . PHP_EOL;
            array_push($this->booksLoanedList, $this->tempBookName);
        } else {
            throw new Exception("BookAlreadyLoanException " . $this->tempBookName);
        }
    }

    public function returnBook(): void
    {
        if (in_array($this->tempBookName, $this->booksLoanedList)) {
            unset($this->booksLoanedList[array_search($this->tempBookName, $this->booksLoanedList)]);
            echo "Success return book " . $this->tempBookName . PHP_EOL;
        } else {
            throw new Exception("BookIsNotOnLoanException " . $this->tempBookName);
        }
    }
}
