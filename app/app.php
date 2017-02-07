<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";


    $app = new Silex\Application();

    $app->get("/", function() {

        return "
            <!DOCTYPE html>
            <html>
              <head>
                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
                <title>Job Board</title>
              </head>
              <body>
                <div class='container'>
                  <h1>Add job</h1>
                  <form action='/job-board'>
                    <div class='form-group'>
                      <label for='title'>Type job title here:</label>
                      <input id='title' name='title' class='form-control' type='text' value='Code God'>
                    </div>
                    <div class='form-group'>
                      <label for='description'>Type job description here:</label>
                      <input id='description' name='description' class='form-control' type='text' value='You will be the god of code'>
                    </div>

                    <button class='btn'>Create Job!</button>
                  </form>
                </div>
              </body>
            </html>
        ";

    });

    $app->get("/job-board", function(){
        $userJob = new JobOpening($_GET["title"], $_GET["description"]);
        return "
            <!DOCTYPE html>
            <html>
              <body>
                <h1>Your job title is: " . $userJob->getTitle() . "</h1>
                <h1>Your job description is : " . $userJob->getDescription() . "</h1>
              </body>
            </html>
        ";
    });

    return $app;
?>
