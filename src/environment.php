<?php
    // @codeCoverageIgnoreStart
    namespace App;

final class Environment
{
    public static function setup()
    {
        $env = \Dotenv\Dotenv::create(__DIR__ . '/../private/');
        $env->load();
        $env->required([
            'ENVIRONMENT',
        ]);
    }
}
