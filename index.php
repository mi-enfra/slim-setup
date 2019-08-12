<?php
    require __DIR__ . '/vendor/autoload.php';
    
    use App\DependencyInjector;
    use App\Environment;
    use App\MiddlewareInjector;
    use App\Router;
    use App\Setting;
    use Slim\App;
    
    $environment = Environment::setup();

    $setting = Setting::get();
    $app = new App($setting);
    
    $dependency = new DependencyInjector();
    $app = $dependency->inject($app);

    $middleware = new MiddlewareInjector();
    $app = $middleware->inject($app);

    $router = new Router();
    $app = $router->setRoutes($app);
    
    $app->run();
