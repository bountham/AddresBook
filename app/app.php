<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";
    // //start sission
    //     session_start();
    // if (empty($_SESSION['list_of_contact'])) {
    //     $_SESSION['list_of_contact'] = array();
    // }

    $app = new Silex\Application();

    $app->get("/", function(){
        $test_one = new Contact("Phaivone");
        $test_two = new Contact("9215 NE 21st Street Vancouver, WA 98664");
        $test_three = new Contact("360 975 2309");

        $list_of_tasks = array($test_one, $test_two, $test_three);
        $output = "";

        foreach ($list_of_tasks as $task) {
        $output = $output . "<p>" . $task->getName() . "</p>";
        }
        return $output;
        });

        return $app;
?>
