<?php

class Subscriber extends AbstractDb {

    public static function findAll() {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT * FROM subscriber';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById($id) {

        $bdd = self::connectDb();

        $request = 'SELECT * FROM subscriber WHERE id = ' . $id;

        $response = $bdd->query($request);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function new($params) {

        $bdd = self::connectDb();
        
        $request =$bdd->prepare( 'INSERT INTO subscriber (first_name,last_name) VALUES (:first_name,:last_name)');
        $request->execute(array(
            'first_name'=>$params['first_name'],
            'last_name'=>$params['last_name']
        ));
        echo 'L\'emprinteur est ajouté :GOOD!';
    }
    public static function update($params) {

        $bdd = self::connectDb();
        
        $request =$bdd->prepare( 'UPDATE subscriber (first_name,last_name) VALUES (:first_name,:last_name)');
        $request->execute(array(
            'first_name'=>$params['first_name'],
            'last_name'=>$params['last_name']
        ));
        echo 'L\'emprinteur est modifié :GOOD!';
    }
    public static function todelete($id) {

        $bdd = self::connectDb();

        $request = 'DELETE FROM subsciber WHERE id ="{$id}" LIMIT 1';

        $response = $bdd->query($request);
    }
}