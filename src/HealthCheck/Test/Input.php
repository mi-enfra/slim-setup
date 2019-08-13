<?php
    namespace App\HealthCheck\Test;

    use App\HealthCheck\HealthCheck;
    use App\HealthCheck\Test\Output;

final class Input
{
    public function start() : Array
    {
        $health = new HealthCheck(new Output());
        $response = $health->respond();
        return $response;
    }
}
