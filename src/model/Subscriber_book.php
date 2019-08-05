<?php

class Subscriber_book extends AbstractDb {

    public static function findAll() {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT * FROM `subscriber_book` 
        JOIN subscriber ON id_subscriber =subscriber.id, 
        JOIN book ON id_book=book.id';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById($id) {

        $bdd = self::connectDb();

        $request = 'SELECT * FROM subscriber_book WHERE id = ' . $id;

        $response = $bdd->query($request);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function new($params) {

        $bdd = self::connectDb();
        
        $request =$bdd->prepare( 'INSERT INTO subscriber_book (first_name,last_name, title, author) AS("NOom", "Prenom", "Titre", "Auteur")
        VALUES (:id_book,:id_subscriber)');
        $request->execute(array(
            'id_book'=>$params['id_book'],
            'id_subscriber'=>$params['id_subscriber']
        ));
        echo 'La liaison livre-emprinteur est ajoutée :GOOD!';
    }
    
    public static function todelete($id) {

        $bdd = self::connectDb();

        $request = 'DELETE FROM subscriber_book WHERE id ="{$id}" LIMIT 1';

        $response = $bdd->query($request);
    }
}