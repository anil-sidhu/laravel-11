<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\AgeCheck; 

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->appendToGroup('check1',[
            CountryCheck::class,
            AgeCheck::class
        ]

        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
