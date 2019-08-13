<?php
    namespace App\Response;

    use App\Shared\Base\HTTPInput as BaseClass;
    use Psr\Container\ContainerInterface;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class DefaultForbidden extends BaseClass
{
    public function __invoke(Request $request, Response $response, Array $args) : Response
    {
        return $response->withStatus(403);
    }
}
