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
                'displayErrorDetails' => true,
            ],
        ];
    }
}
