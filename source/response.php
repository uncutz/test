<?php declare(strict_types=1);

namespace Backend\Slim;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Factory\AppFactory;

require __DIR__ .'/../vendor/autoload.php';


function slim () {
    $app = AppFactory::create();
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param array $args
     * @return ResponseInterface
     */

    $app->get( '/', function (ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $response->getBody()->write('Hello World!');

        return $response;
    }
    );

    $app->run();
}

