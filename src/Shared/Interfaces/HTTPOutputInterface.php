<?php
    namespace App\Shared\Interfaces;

    use Psr\Container\ContainerInterface;
    use Slim\Http\Response;

interface HTTPOutputInterface
{
    public function send(Array $input) : Response;
}
