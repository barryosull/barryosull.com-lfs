<?php
declare(strict_types=1);

namespace Barryosull\Slim;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController
{
    public function handle(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $renderer = new Renderer();

        $body = $renderer->render("home", ["uri" => strval($request->getUri())]);

        $response->getBody()->write($body);

        return $response;
    }
}
