<?php
    namespace App\HealthCheck;

    use App\HealthCheck\HealthCheck;
    use App\HealthCheck\HTTPOutput;
    use App\Shared\Interfaces\HTTPInputInterface;
    use Psr\Container\ContainerInterface;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class HTTPInput implements HTTPInputInterface
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, Array $args) : Response
    {
        $output = new HTTPOutput($response);
        $health = new HealthCheck($output);
        return $health->respond();
    }

    private function getRunTime() : string
    {
    }
}
