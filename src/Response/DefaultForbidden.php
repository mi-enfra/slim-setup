<?php
    namespace App\Response;

    use App\Shared\Interfaces\HTTPInputInterface;
    use Psr\Container\ContainerInterface;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class DefaultForbidden implements HTTPInputInterface
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, Array $args) : Response
    {
        return $response->withStatus(403);
    }
}
