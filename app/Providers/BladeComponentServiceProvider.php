<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-07-23 08:44:20              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Providers; use Illuminate\Support\Facades\Blade; use Illuminate\Support\ServiceProvider; class BladeComponentServiceProvider extends ServiceProvider { public function register() { Blade::component('layouts.app', 'admin-layout'); } public function boot() { } }
