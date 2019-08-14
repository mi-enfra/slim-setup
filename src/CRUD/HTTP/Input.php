<?php
    namespace App\CRUD\HTTP;

    use App\CRUD\CRUD;
    use App\CRUD\HTTP\Output;
    use App\CRUD\HTTP\Storage;
    use App\Shared\Base\HTTPInput;
    use Slim\Http\Request;
    use Slim\Http\Response;

final class Input extends HTTPInput
{
    public function __invoke(Request $request, Response $response, Array $args) : Response
    {
        $output = new Output($response);
        $storage = new Storage();
        $health = new CRUD($output, $storage);
        return $health->respond();
    }
}
