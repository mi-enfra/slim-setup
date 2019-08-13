<?php
    namespace App\HealthCheck;

    use App\HealthCheck\Test\Input;
    use App\Environment;
    use PHPUnit\Framework\TestCase;

final class HealthCheckTest extends TestCase
{
    protected $response;

    public static function setUpBeforeClass()
    {
        Environment::setup();
    }

    public function setUp()
    {
        $test = new Input();
        $this->response = $test->start();
    }

    public function test_shouldHaveIndices() : void
    {
        $this->assertArrayHasKey('Environment', $this->response);
        $this->assertArrayHasKey('Response Time', $this->response);
    }
}
