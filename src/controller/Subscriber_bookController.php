<?php

class Subscriber_book_bookController {

    public static function list() {

        // 1. Appel du Model
        $Subscriber_book_books = Subscriber_book_book::findAll();

        // 2. Return/include de la view
        include( __DIR__ . '/../views/Subscriber_book_books/list.php');

    }

    public static function read(int $id) {

        // 1. Appel du Model
        $Subscriber_book_book = Subscriber_book_book::findById($id);
        // 2. Include de la lview

        include(__DIR__ . '/../views/Subscriber_book_books/read.php');

    }

    public static function create() {
        // include du formulaire qui pointera vers Subscriber_book_bookController::new
        include(__DIR__ . '/../views/Subscriber_book_books/new.php');
    }
    public static function new($params) {
        // traitement du formulaire qui vient de Subscriber_book_bookController::create
        Subscriber_book_book::new($params); 
        echo"L\'emprinteur est vrée"; 

    }

    public static function delete($id) {
        // 1. Appel du Model
        $Subscriber_book_book = Subscriber_book_book::findById($id);
        // 2. Include de la lview
                
        include(__DIR__ . '/../views/Subscriber_book_books/delete.php');

    }
    public static function todelete($id) {
        // traitement du formulaire qui vient de Subscriber_book_bookController::delete
        Subscriber_book_book::todelete($id); 
        echo"L\'emprinteur est supprimé avec succés"; 
    }

}