<?php
    namespace App\CRUD;

    use App\Shared\Interfaces\OutputInterface;
    use App\Shared\Interfaces\StorageInterface;

final class CRUD
{
    protected $output;
    protected $storage;

    public function __construct(OutputInterface $output, StorageInterface $storage)
    {
        $this->output = $output;
        $this->storage = $storage;
    }

    public function respond()
    {
        $response = $this->storage->readAll([]);
        return $this->output->send($response);
    }

    private function getRuntime() : String
    {
        return strval(number_format(1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])));
    }
}
