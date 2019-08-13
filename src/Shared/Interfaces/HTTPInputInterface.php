<?php
    namespace App\Shared\Interfaces;

    use Psr\Container\ContainerInterface;
    use Slim\Http\Request;
    use Slim\Http\Response;

interface HTTPInputInterface
{
    public function __construct(ContainerInterface $container);

    public function __invoke(Request $request, Response $response, Array $args) : Response;
}
