<?php

class BookController {

    public static function list() {

        // 1. Appel du Model
        $books = Book::findAll();

        // 2. Return/include de la view
        include( __DIR__ . '/../views/books/list.php');

    }

    public static function read(int $id) {

        // 1. Appel du Model
        $book = Book::findById($id);
        // 2. Include de la lview

        include(__DIR__ . '/../views/books/read.php');

    }

    public static function create() {
        // include du formulaire qui pointera vers BookController::new
        include(__DIR__ . '/../views/books/new.php');
    }
    public static function new($params) {
        // traitement du formulaire qui vient de BookController::create
        Book::new($params); 
        echo"le livre est vrée"; 

    }

    public static function edit($id) {
        // 1. Appel du Model
        $book = Book::findById($id);
        // 2. Include de la lview
        
        include(__DIR__ . '/../views/books/update.php');

    }
    public static function update($params) {
        // traitement du formulaire qui vient de BookController::edit
        Book::update($params); 
        echo"le livre est modifié"; 
    }

    public static function delete($id) {
        // 1. Appel du Model
        $book = Book::findById($id);
        // 2. Include de la lview
                
        include(__DIR__ . '/../views/books/delete.php');

    }
    public static function todelete($id) {
        // traitement du formulaire qui vient de BookController::delete
        Book::todelete($id); 
        echo"le livre est supprimé avec succés"; 
    }

}