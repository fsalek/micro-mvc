<?php

class SubscriberController {

    public static function list() {

        // 1. Appel du Model
        $subscribers = Subscriber::findAll();

        // 2. Return/include de la view
        include( __DIR__ . '/../views/subscribers/list.php');

    }

    public static function read(int $id) {

        // 1. Appel du Model
        $subscriber = Subscriber::findById($id);
        // 2. Include de la lview

        include(__DIR__ . '/../views/subscribers/read.php');

    }

    public static function create() {
        // include du formulaire qui pointera vers SubscriberController::new
        include(__DIR__ . '/../views/subscribers/new.php');
    }
    public static function new($params) {
        // traitement du formulaire qui vient de SubscriberController::create
        Subscriber::new($params); 
        echo"L\'emprinteur est vrée"; 

    }

    public static function edit($id) {
        // 1. Appel du Model
        $subscriber = Subscriber::findById($id);
        // 2. Include de la lview
        
        include(__DIR__ . '/../views/subscribers/update.php');

    }
    public static function update($params) {
        // traitement du formulaire qui vient de SubscriberController::edit
        Subscriber::update($params); 
        echo"L\'emprinteur est modifié"; 
    }

    public static function delete($id) {
        // 1. Appel du Model
        $subscriber = Subscriber::findById($id);
        // 2. Include de la lview
                
        include(__DIR__ . '/../views/subscribers/delete.php');

    }
    public static function todelete($id) {
        // traitement du formulaire qui vient de SubscriberController::delete
        Subscriber::todelete($id); 
        echo"L\'emprinteur est supprimé avec succés"; 
    }

}