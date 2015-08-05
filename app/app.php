<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Task.php";

    $app = new Silex\Application();

    $app->get("/", function()
    {
        $test_task = new Task("Learn PHP.");
        $test_task2 = new Task("Learn Drupal.");
        $test_task3 = new Task("Visit France.");

        $list_of_tasks = array($test_task, $test_task2, $test_task3);
        $output = "";

        foreach ($list_of_tasks as $task)
        {
            $output = $output . "<p>" . $task->getDescription() . "</p>";
        }

        return $output;
    });

    return $app;
?>
