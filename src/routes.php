<?php
    // @codeCoverageIgnoreStart

$app->any('/[{path:.*}]', function ($request, $response, $args) {
    return $response->withStatus(403);
});
