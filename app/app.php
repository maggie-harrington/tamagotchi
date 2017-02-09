<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamagotchi.php";

    session_start();
    if (empty($_SESSION['tamagotchi_array'])) {
        $_SESSION['tamagotchi_array'] = array();
    }
    if ($Tamagotchi->timePass == false) {
        return $app['twig']->render('dead.html.twig');
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));


    $app->get("/", function() use ($app) {

        return $app['twig']->render('create_new.html.twig');
    });

    $app->post("/play", function() use($app) {
        $tamagotchi = new Tamagotchi($_POST['name']);
        $tamagotchi->save();
        return $app['twig']->render('play.html.twig', array('newtamagotchi' => $tamagotchi));
    });

    // $app->post("/dead", function() use ($app) {
    //
    //     return $app['twig']->render('dead.html.twig');
    // });

    return $app;
?>
