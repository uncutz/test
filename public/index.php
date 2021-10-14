<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DevRoad</title>

    <link rel="stylesheet" href="libaries/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/custom.css">
</head>

<body>


<nav class="navbar pt-2">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">DevRoad</a>

        <div class="col-auto d-flex justify-content-around align-items-center">
            <div class="w-100 px-2">
                <button type="button" class="btn btn-secondary btn-sm -sign-up-button">Sign Up</button>
                <button type="button" class="btn btn-secondary btn-sm -sign-in-button">Sign In</button>
            </div>
            <div class="px-2">
                <img class="img-fluid -profil-image" src="#" alt="">
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

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->run();



?>
