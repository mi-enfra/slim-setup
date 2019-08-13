<?php
    namespace App\Shared\Base;
    
    use App\Shared\Interfaces\OutputInterface;
    use Slim\Http\Response;

abstract class HTTPOutput implements OutputInterface
{
    protected $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    abstract public function send(Array $input) : Response;
}
