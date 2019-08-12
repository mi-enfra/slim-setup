<?php
    namespace App\DefaultResponse;

    use Psr\Container\ContainerInterface;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class DefaultResponse
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, Array $args) : Response
    {
        return $response->withStatus(403);
    }
}
