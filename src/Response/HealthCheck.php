<?php
    namespace App\Response;

    use App\Shared\Interfaces\HTTPInput;
    use Psr\Container\ContainerInterface;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class HealthCheck implements HTTPInput
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, Array $args) : Response
    {
        return $response->withJson([
            'Environment' => $_ENV['ENVIRONMENT'],
            'Response Time' => $this->getRunTime() . 'ms',
        ]);
    }

    private function getRunTime() : string
    {
        return strval(number_format(1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])));
    }
}
