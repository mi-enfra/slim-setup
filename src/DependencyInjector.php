<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use App\HealthCheck\HTTP\Input as HealthCheck;
    use App\CRUD\HTTP\Input as CRUD;
    use App\Response\DefaultForbidden;
    use Slim\App;
    use Illuminate\Database\Capsule\Manager;

final class DependencyInjector
{
    protected $container;

    public function inject(App $app) : App
    {
        $container = $app->getContainer();

        $capsule = new Manager;
        $capsule->addConnection($container['settings']['database']);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        $container['database'] = function ($container) use ($capsule) {
            return $capsule;
        };

        $container['CRUD'] = function ($container) {
            return new CRUD($container);
        };

        $container['DefaultResponse'] = function ($container) {
            return new DefaultForbidden($container);
        };

        $container['HealthCheck'] = function ($container) {
            return new HealthCheck($container);
        };
        
        return $app;
    }
}
