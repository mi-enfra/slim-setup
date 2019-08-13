<?php
    namespace App\HealthCheck;

    use App\Shared\Interfaces\HTTPOutputInterface;
    use Slim\Http\Response;

final class HTTPOutput implements HTTPOutputInterface
{
    protected $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function send(Array $input) : Response
    {
        return $this->response->withJson($input);
    }
}
