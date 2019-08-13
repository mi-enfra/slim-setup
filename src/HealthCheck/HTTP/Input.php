<?php
    namespace App\HealthCheck\HTTP;

    use App\HealthCheck\HealthCheck;
    use App\HealthCheck\HTTP\Output;
    use App\Shared\Base\HTTPInput;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class Input extends HTTPInput
{
    public function __invoke(Request $request, Response $response, Array $args) : Response
    {
        $output = new Output($response);
        $health = new HealthCheck($output);
        return $health->respond();
    }
}
