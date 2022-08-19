<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    // modificado 040322
    // public const HOME = '/dashboard';
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('web', 'auth')
                ->prefix('admin')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));

            Route::middleware('web', 'auth')
                ->prefix('prontuario')
                ->namespace($this->namespace)
                ->group(base_path('routes/prontuario.php'));

            Route::middleware('web', 'auth')
                ->prefix('ofjudicial')
                ->namespace($this->namespace)
                ->group(base_path('routes/ofjudicial.php'));

            Route::middleware('web', 'auth')
                ->prefix('ofrepar')
                ->namespace($this->namespace)
                ->group(base_path('routes/ofrepar.php'));

            Route::middleware('web', 'auth')
                ->prefix('atpublico')
                ->namespace($this->namespace)
                ->group(base_path('routes/atpublico.php'));

            Route::middleware('web', 'auth')
                ->prefix('ofcitaciones')
                ->namespace($this->namespace)
                ->group(base_path('routes/ofcitaciones.php'));

            Route::middleware('web', 'auth')
                ->prefix('ayuda')
                ->namespace($this->namespace)
                ->group(base_path('routes/ayuda.php'));

        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
