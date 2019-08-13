<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use Slim\App;

final class Router
{
    public function setRoutes(App $app) : App
    {
        $app->get('/health[/]', 'HealthCheck');

        $app->any('/[{path:.*}]', 'DefaultResponse');
        
        return $app;
    }
}
