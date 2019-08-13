<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use Slim\App;
    use App\Response\DefaultForbidden;
    use App\Response\HealthCheck;

final class DependencyInjector
{
    public function inject(App $app) : App
    {
        $container = $app->getContainer();

        $container['DefaultResponse'] = function ($container) {
            return new DefaultForbidden($container);
        };

        $container['HealthCheck'] = function ($container) {
            return new HealthCheck($container);
        };
        
        return $app;
    }
}
