<?php

use App\Http\Middleware\FrontMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\SetLocalMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias(
            [
                'setLocale' => SetLocalMiddleware::class,
                'mainSettings' => FrontMiddleWare::class,
            ]
        );
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
