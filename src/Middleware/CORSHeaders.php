<?php
    namespace App\Middleware;

    use Psr\Http\Message\ResponseInterface;
    use Slim\App;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class CORSHeaders
{
    public function __invoke(Request $request, Response $response, App $next) : ResponseInterface
    {
        $response = $next($request, $response);
        return $response->withHeader(
            'Setup',
            'By Marvin'
        );
    }
}
