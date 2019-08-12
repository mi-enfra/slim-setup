<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use Slim\App;

final class Router
{
    public function setRoutes(App $app) : App
    {
        $app->get('/hello[/]', function ($request, $response, $args) {
            return $response->withJson([
                'Hello' => 'World',
                'Environment' => $_ENV['ENVIRONMENT'],
            ]);
        });

        $app->any('/[{path:.*}]', 'DefaultResponse');
        
        return $app;
    }
}
