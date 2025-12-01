<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'user' => \App\Http\Middleware\UserMiddleware::class,
        ]);
        
        // Set default redirect for authenticated users trying to access guest routes
        $middleware->redirectGuestsTo(fn () => '/login');
        $middleware->redirectUsersTo(function () {
            // Check if user is admin and redirect accordingly
            if (auth()->check() && auth()->user()->is_admin == 1) {
                return '/dashboard/admin';
            }
            return '/dashboard/user';
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
