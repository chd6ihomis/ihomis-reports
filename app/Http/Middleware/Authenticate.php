<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-07-23 08:44:19              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Auth\Middleware\Authenticate as Middleware; class Authenticate extends Middleware { protected function redirectTo($request) { if ($request->expectsJson()) { goto QpPzN; } return route('login'); QpPzN: } }
