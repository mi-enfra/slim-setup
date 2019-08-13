<?php
    namespace App\HealthCheck\Test;

    use App\Shared\Interfaces\OutputInterface;

final class Output implements OutputInterface
{
    public function send(Array $input) : Array
    {
        return $input;
    }
}
