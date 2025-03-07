<?php

use App\Http\Middleware\AddUserAgentHeader;
use App\Http\Middleware\ApiKeyMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'api.key' => ApiKeyMiddleware::class,
            'headers' => AddUserAgentHeader::class,
        ]);
        $middleware->use([
            \Illuminate\Http\Middleware\HandleCors::class,
        ]);
        $middleware->validateCsrfTokens(except: [
            'api/distance',
            'api/properties/recommendations'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
