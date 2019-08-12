<?php
    // @codeCoverageIgnoreStart
    namespace App;

    use App\Middleware\CORSHeaders;
    use Slim\App;

final class MiddlewareInjector
{
    public function inject(App $app) : App
    {
        $app->add(new CORSHeaders());

        return $app;
    }
}
