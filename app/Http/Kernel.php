<?php

namespace Mbelinger\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Mbelinger\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \Mbelinger\Http\Middleware\VerifyCsrfToken::class,

    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Mbelinger\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \Mbelinger\Http\Middleware\RedirectIfAuthenticated::class,
        'sentry.auth' => \Sentinel\Middleware\SentryAuth::class,
        'sentry.admin' => \Sentinel\Middleware\SentryAdminAccess::class,
        'sentry.member' => \Sentinel\Middleware\SentryMember::class,
        'sentry.guest' => \Sentinel\Middleware\SentryGuest::class,
    ];

}
