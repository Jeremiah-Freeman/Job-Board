<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";
    require_once __DIR__."/../src/Contact.php";


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
                    <div class='form-group'>
                      <label for='name'>Your name here:</label>
                      <input id='name' name='name' class='form-control' type='text' value='Bob Smith'>
                    </div>
                    <div class='form-group'>
                      <label for='email'>Contact e-mail here:</label>
                      <input id='email' name='email' class='form-control' type='text' value='bobSmith@gmail.com'>
                    </div>
                    <div class='form-group'>
                      <label for='phone'>Contact phone here:</label>
                      <input id='phone' name='phone' class='form-control' type='text' value='503-893-4532'>
                    </div>

                    <button class='btn'>Create Job!</button>
                  </form>
                </div>
              </body>
            </html>
        ";

    });

    $app->get("/job-board", function(){
        // $newContact = new Contact($_GET["name"], $_GET["email"], $_GET["phone"]);
        $userJob = new JobOpening($_GET["title"], $_GET["description"], $_GET["name"], $_GET["email"], $_GET["phone"]);
        return "
            <!DOCTYPE html>
            <html>
              <body>
                <h1>Your job title is: " . $userJob->getTitle() . "</h1>
                <h1>Your job description is : " . $userJob->getDescription() . "</h1>
                <h3>Contact name: " . $userJob->getContactName() . "<h3>
                <h3>Contact e-mail: " . $userJob->getContactEmail() . "<h3>
                <h3>Contact phone: " . $userJob->getContactPhone() . "<h3>
              </body>
            </html>
        ";
    });

    return $app;
?>
