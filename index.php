<?php

/**
 * author: Salek
 * Autoload Classes
 */

const CLASSES_SOURCES = [
    '/src',
    '/src/model',
    '/src/controller'
];

function autoloadClass($class)
{

    $sources = array_map(function ($folder) use ($class) {

        return __DIR__ . $folder . '/' . $class . '.php';
    }, CLASSES_SOURCES);

    foreach ($sources as $s) {

        if (file_exists($s)) {
            require_once($s);
        }
    }
}

spl_autoload_register('autoloadClass');



/**
 * Exemples de routes:
 *
 * /index.php?model=ouvrages&method=list
 * /index.php?model=ouvrages&method=read&id=3
 * /index.php?model=ouvrages&method=new
 * /index.php?model=ouvrages&method=edit&id=3
 * /index.php?model=ouvrages&method=delete&id=3
 */


switch ($_GET['model']) {
    case 'subscriber':
    switch($_GET['subscriber']) {
        case 'list':
            SubscriberController::list();
        break;
    
        case 'read':
            SubscriberController::read( intval( $_GET['id'] ) );
            break;
        
        case 'new':
            SubscriberController::new($_POST);
            break;
        
        case 'create':
            SubscriberController::create();
            break;
        
        case 'edit':
            SubscriberController::edit($_GET['id']);
            break;
        
        case 'update':
            SubscriberController::update($_POST);
            break;
        
        case 'delete':
            SubscriberController::delete($_GET['id']);
            break;
        case 'todelete':
            SubscriberController::todelete($_POST);
        break;   

    }


    case 'subscriber_book':
    switch($_GET['method']) {

        case 'list':
            Subscriber_bookController::list();
            break;
        
        case 'read':
            Subscriber_bookController::read( intval( $_GET['id'] ) );
            break;
        
        case 'new':
            Subscriber_bookController::new($_POST);
            break;
        
        case 'create':
            Subscriber_bookController::create();
            break;
        case 'delete':
            Subscriber_bookController::delete($_GET['id']);
            break;
        case 'todelete':
            Subscriber_bookController::todelete($_POST);
        break; 
        }
        break;

    case 'book':
        switch($_GET['method']) {

        case 'list':
            BookController::list();
            break;

        case 'read':
            BookController::read( intval( $_GET['id'] ) );
            break;

        case 'new':
            BookController::new($_POST);
            break;

        case 'create':
            BookController::create();
            break;

        case 'edit':
            BookController::edit($_GET['id']);
            break;

        case 'update':
            BookController::update($_POST);
            break;

        case 'delete':
                BookController::delete($_GET['id']);
                break;
            }
        break;

    default:
        # code...
        break;
}