<?php
    use Slim\App;

    require __DIR__ . '/vendor/autoload.php';
    require __DIR__ . '/src/environment.php';
    
    $settings = require __DIR__ . '/src/settings.php';
    $app = new App($settings);
    
    require __DIR__ . '/src/dependencies.php';
    require __DIR__ . '/src/middleware.php';
    require __DIR__ . '/src/routes.php';
    
    $app->run();
