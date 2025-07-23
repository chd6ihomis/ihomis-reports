<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-07-23 08:44:20              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Providers; use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; use Illuminate\Support\Facades\Gate; class AuthServiceProvider extends ServiceProvider { protected $policies = array(); public function boot() { $this->registerPolicies(); } }
