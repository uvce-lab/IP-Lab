<?php 

class Book
{
    public $ISBN, $Title, $Author, $Edition, $Publication;

    function Book($isbn, $title, $author, $edition, $publication)
    {
        $this->ISBN = $isbn;
        $this->Title = $title;
        $this->Author = $author;
        $this->Edition = $edition;
        $this->Publication = $publication;
    }

    static function parseSqlRows($sqlResult)
    {
        $books = new ArrayObject();
        foreach ($sqlResult as $row)
            $books->append(new Book($row['isbn'], $row['title'], $row['author'], $row['edition'], $row['publication']));
        return $books;
    }
}

?>