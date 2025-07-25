<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-07-23 08:44:20              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Providers; use Illuminate\Cache\RateLimiting\Limit; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; use Illuminate\Http\Request; use Illuminate\Support\Facades\RateLimiter; use Illuminate\Support\Facades\Route; class RouteServiceProvider extends ServiceProvider { public const HOME = '/home'; public function boot() { $this->configureRateLimiting(); $this->routes(function () { Route::prefix('api')->middleware('api')->namespace($this->namespace)->group(base_path('routes/api.php')); Route::middleware('web')->namespace($this->namespace)->group(base_path('routes/web.php')); }); } protected function configureRateLimiting() { RateLimiter::for('api', function (Request $request) { return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip()); }); } }
