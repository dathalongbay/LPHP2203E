<?php
namespace MVC\Controllers;

use MVC\Models\BookModel;

class BookController {

    /*
     * liệt kê ra các bản ghi
     * */
    public function indexAction() {
        echo '<br>' . __METHOD__;

        $model = new BookModel();
        $books = $model->fetchAll();

        include_once 'mvc/views/book/index.php';

    }

    /*
     * trả về view thêm mới book
     * */
    public function addAction(){
        echo '<br>' . __METHOD__;
        exit;
    }


    public function insertAction(){
        echo '<br>' . __METHOD__;
        exit;
    }

    /**
     * trả về view sửa book
     */
    public function editAction(){
        echo '<br>' . __METHOD__;
        exit;
    }

    public function updateAction(){
        echo '<br>' . __METHOD__;
        exit;
    }

    /*
     * trả về view xóa book
     * */
    public function deleteAction(){
        echo '<br> abc ' . __METHOD__;
        exit;
    }

}