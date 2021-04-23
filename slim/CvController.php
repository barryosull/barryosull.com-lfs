<?php
declare(strict_types=1);

namespace Barryosull\Slim;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class CvController
{
    public function handle(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $renderer = new Renderer();

        $body = $renderer->render("cv", []);

        $response->getBody()->write($body);

        return $response;
    }
}
