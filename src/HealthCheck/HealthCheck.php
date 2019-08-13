<?php
    namespace App\HealthCheck;

    use App\Shared\Interfaces\HTTPOutputInterface;

final class HealthCheck
{
    protected $output;

    public function __construct(HTTPOutputInterface $output)
    {
        $this->output = $output;
    }

    public function respond()
    {
        $response = [
            'Environment' => $_ENV['ENVIRONMENT'],
            'Response Time' => $this->getRunTime() . 'ms',
        ];
        return $this->output->send($response);
    }

    private function getRuntime() : String
    {
        return strval(number_format(1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])));
    }
}
