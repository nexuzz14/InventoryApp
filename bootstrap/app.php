<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\adminMiddleware;
use App\Http\Middleware\multipleMiddleware;
use App\Http\Middleware\notLogged;
use App\Http\Middleware\petugasMiddelware;
use App\Http\Middleware\userPetugas;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
               "admin"=>adminMiddleware::class,
               "petugas"=>petugasMiddelware::class,
               "multiple"=>multipleMiddleware::class,
               "guest"=>notLogged::class,
               "userPetugas"=>userPetugas::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
