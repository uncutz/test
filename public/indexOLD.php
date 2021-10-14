<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DevRoad</title>

    <link rel="stylesheet" href="libaries/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="module/assets/custom.css">
</head>

<body>
    <template id="template-sign-in-popup">
        <div class="position-absolute align-items-center justify-content-center sign-in-popup">
            <div class="row mt-5 d-flex justify-content-center">
                <div class="d-flex flex-column justify-content-center position-absolute sign-in-field">
                    <button type="button" class="btn btn-secondary btn-sm position-absolute close">x</button>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Username"><br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email"><br>
                    <label for="password1">Password:</label>
                    <input type="password" id="password1" name="password1" placeholder="Password"><br>
                    <button type="button" class="btn btn-secondary submit-sign-in">Sign In</button>
                </div>
            </div>
        </div>
    </template>

    <nav class="navbar pt-2">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">DevRoad</a>

            <div class="col-auto d-flex justify-content-around align-items-center">
                <div class="w-100 px-2">
                    <button type="button" class="btn btn-secondary btn-sm sign-up-button">Sign Up</button>
                    <button type="button" class="btn btn-secondary btn-sm sign-in-button">Sign In</button>
                </div>
                <div class="px-2">
                    <img class="img-fluid profile-image" src="#" alt="">
                </div>
            </div>
        </div>
    </nav>


    <nav class="navbar">
        <div class="container-fluid justify-content-around">
            <a class="col-lg-auto text-decoration-none" href="#">Home</a>
            <a class="col-lg-auto text-decoration-none" href="#">About</a>
            <a class="col-lg-auto text-decoration-none" href="#">Dashboard</a>
            <a class="col-lg-auto text-decoration-none" href="#">Discovery</a>
        </div>
    </nav>


    <!--Section-->

    <div class="container">
        <div class="row my-5 justify-content-center text-center">
            <div class="col-auto">
                <h1 class="">What are we?</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut facere libero neque, numquam sed.
                    Alias aliquam, assumenda cum doloribus dolorum ducimus facere nulla obcaecati officia quis repellendus
                    sed, sint.Aliquid architecto asperiores consequatur dolor ex facilis illo labore laudantium magni
                    maxime, nisi nostrum numquam obcaecati placeat possimus provident quae quaerat quam quia quibusdam quo
                    sunt tempora veritatis. Dolore, incidunt. Amet animi consequatur dignissimos eligendi expedita nostrum
                    odio temporibus vero voluptas. A ad dicta ea magni nam nobis sit. Assumenda cupiditate enim eveniet fuga
                    inventore modi mollitia porro sapiente sequi. Commodi doloremque harum nisi officiis ratione veniam
                    voluptatum. Accusantium aliquid autem cum dolor molestias nulla quo reiciendis tenetur! Beatae
                    consectetur hic odit optio quidem quod repellendus veritatis. Impedit quibusdam,veniam.
                </p>
            </div>
        </div>
    </div>



    <script src="libaries/bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>

    <script type="module">
        import app from "./app.js";
        app();
    </script>
</body>

</html>


<?php

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

//print_r($_SERVER);

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");


    return $response;
});

$app->run();

//$ php -S localhost:8888
//docker exec -it <container id> bash
?>



