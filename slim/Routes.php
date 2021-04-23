<?php

namespace Barryosull\Slim;

use Slim\App;

class Routes
{
    public static function register(App $slimApp): App
    {
        $slimApp->get('/', function ($request, $response, $args) {
            return (new HomeController())->handle($request, $response, $args);
        });

        $slimApp->get('/cv', function ($request, $response, $args) {
            return (new CvController())->handle($request, $response, $args);
        });

        $slimApp->get('/talks', function ($request, $response, $args) {
            return (new TalksController())->handle($request, $response, $args);
        });

        $slimApp->get('/blog[/page-{page}]', function ($request, $response, $args) {
            return (new BlogController())->handle($request, $response, $args);
        });

        $slimApp->get('/blog/category/{category}[/page-{page}]', function ($request, $response, $args) {
            return (new BlogController())->handle($request, $response, $args);
        });

        $slimApp->get("/blog/feed", function ($request, $response, $args) {
            return (new BlogFeedController())->handle($request, $response, $args);
        });

        $slimApp->get("/blog/{slug}", function ($request, $response, $args) {
            return (new BlogArticleController())->handle($request, $response, $args);
        });

        return $slimApp;
    }
}
