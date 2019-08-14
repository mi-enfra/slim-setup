<?php
    // @codeCoverageIgnoreStart
    namespace App;

final class Setting
{
    public static function get() : Array
    {
        return [
            'settings' => [
                'addContentLengthHeader' => false,
                'determineRouteBeforeAppMiddleware' => true,
                'database' => [
                    'driver' => 'mysql',
                    'host' => $_ENV['DATABASE_HOSTNAME'],
                    'database' => $_ENV['DATABASE_DATABASE'],
                    'username' => $_ENV['DATABASE_USERNAME'],
                    'password' => $_ENV['DATABASE_PASSWORD'],
                    'charset' => 'utf8',
                    'prefix' => '',
                    'options' => []
                ],
                'displayErrorDetails' => true,
            ],
        ];
    }
}
