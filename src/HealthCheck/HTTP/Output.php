<?php
    namespace App\HealthCheck\HTTP;

    use App\Shared\Base\HTTPOutput;
    use Slim\Http\Response;

final class Output extends HTTPOutput
{
    public function send(Array $input) : Response
    {
        return $this->response->withJson($input);
    }
}
