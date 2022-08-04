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

    public function update($data){

        $sql = 'UPDATE books
        SET book_title = :book_title,book_price = :book_price,
            book_intro = :book_intro, book_content = :book_content,
            book_created = :book_created, book_author = :book_author
        WHERE book_id = :book_id';

// prepare statement
        $statement = $this->pdo->prepare($sql);

// bind params
        $statement->bindParam(':book_title', $data['book_title'], \PDO::PARAM_STR);
        $statement->bindParam(':book_price', $data['book_price']);
        $statement->bindParam(':book_intro', $data['book_intro'], \PDO::PARAM_STR);
        $statement->bindParam(':book_content', $data['book_content'], \PDO::PARAM_STR);
        $statement->bindParam(':book_created', $data['book_created']);
        $statement->bindParam(':book_author', $data['book_author'], \PDO::PARAM_INT);
        $statement->bindParam(':book_id', $data['book_id'], \PDO::PARAM_INT);

// execute the UPDATE statment
        if ($statement->execute()) {
            $_SESSION['result'] = true;
            $_SESSION['message'] = 'Cập nhật thành công';

            $url = SITE_URL.'?controller=book&action=edit&id='.$data['book_id'];
            header("Location: $url");
            exit;
        } else {
            $_SESSION['result'] = false;
            $_SESSION['message'] = 'Cập nhật thất bại';
            $url = SITE_URL.'?controller=book&action=edit&id='.$data['book_id'];
            header("Location: $url");
            exit;
        }
    }

    public function delete(){

    }


}