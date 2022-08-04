<?php
namespace MVC\Models;

class BookModel extends Connect {

    public function fetchAll() {
        $sql = 'SELECT b.*,a.author_name FROM books as b LEFT JOIN `authors` as a ON b.book_author = a.author_id ORDER BY b.book_created DESC LIMIT 0,50';
        $statement = $this->pdo->query($sql);
        $books = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $books;
    }

    public function fetchOne($bookId) {
        $sqlBook = 'SELECT * FROM books WHERE book_id = :book_id';

        $statementBook = $this->pdo->prepare($sqlBook);
        $statementBook->bindParam(':book_id', $bookId, \PDO::PARAM_INT);
        $statementBook->execute();
        $book = $statementBook->fetch(\PDO::FETCH_ASSOC);

        return $book;
    }

    public function insert(){

    }

    public function update(){

    }

    public function delete(){

    }


}