<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use Slim\App;
    use App\HealthCheck\HTTPInput as HealthCheck;
    use App\Response\DefaultForbidden;

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
