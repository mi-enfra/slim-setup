<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use Slim\App;
    use App\DefaultResponse\DefaultResponse;

final class DependencyInjector
{
    public function inject(App $app) : App
    {
        $container = $app->getContainer();

        $container['DefaultResponse'] = function ($container) {
            return new DefaultResponse($container);
        };
        
        return $app;
    }
}
