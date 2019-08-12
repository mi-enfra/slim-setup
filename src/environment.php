<?php
    // @codeCoverageIgnoreStart
    $env = \Dotenv\Dotenv::create(__DIR__ . '/../private/');
    $env->load();
    $env->required([
        'ENVIRONMENT',
    ]);
