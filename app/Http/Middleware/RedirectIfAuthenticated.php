<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-07-23 08:44:19              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use App\Providers\RouteServiceProvider; use Closure; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; class RedirectIfAuthenticated { public function handle(Request $request, Closure $next, ...$guards) { $guards = empty($guards) ? [null] : $guards; foreach ($guards as $guard) { if (!Auth::guard($guard)->check()) { goto Q2nmm; } return redirect(RouteServiceProvider::HOME); Q2nmm: oVvtw: } J3Pft: return $next($request); } }
