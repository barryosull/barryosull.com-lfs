<?php
declare(strict_types=1);

namespace Barryosull\Slim;

use Psr\Http\Message\ResponseInterface;
use Slim\App;
use Slim\Container;
use Slim\Http\Headers;
use Slim\Http\Request;
use Slim\Http\RequestBody;
use Slim\Http\Response;
use Slim\Http\Uri;

class WebApp
{
    public function run()
    {
        $slimApp = $this->makeApp();

        $slimApp->run();
    }

    public function visitUrl(string $uri): ResponseInterface
    {
        $slimApp = $this->makeApp();

        $url = getenv('DOMAIN') . "/" . $uri;

        $request = new Request(
            "GET",
            Uri::createFromString($url),
            new Headers(),
            [],
            [],
            new RequestBody()
        );

        return $slimApp->process($request, new Response());
    }

    private function makeApp(): App
    {
        $configuration = [
            'settings' => [
                'displayErrorDetails' => true,
            ],
        ];
        $c = new Container($configuration);

        $app = new App($c);

        $this->addCacheMiddleware($app);
        $this->addRoutes($app);

        return $app;
    }

    /**
     * @param App $slimApp
     */
    private function addRoutes(App $slimApp): void
    {
        Routes::register($slimApp);
    }

    /**
     * @param App $slimApp
     */
    private function addCacheMiddleware(App $slimApp): void
    {
        $slimApp->add(function ($request, $response, $next) {

            $response = $next($request, $response);

            $response = $response->withHeader('Cache-Control', 'max-age=600, public');

            return $response;
        });
    }
}
