<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";
    session_start();
    if(empty($_SESSION['list_of_contact'])) {
        $_SESSION['list_of_contact'] = array();
        }
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

        $app->get("/", function() use ($app){
            return $app['twig']->render('contact.twig', array('contact' => Contact::getAll()));
    });

    $app->post("/create_contact", function() use ($app) {
        $addcontact = new Contact($_POST['name']);
        $addcontact->save();
        return $app['twig']->render('create_contact.twig', array('new_contact' => $addcontact));
    });

    return $app;
?>
