<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-07-23 08:44:20              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Providers; use Illuminate\Auth\Events\Registered; use Illuminate\Auth\Listeners\SendEmailVerificationNotification; use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider; use Illuminate\Support\Facades\Event; class EventServiceProvider extends ServiceProvider { protected $listen = array(Registered::class => array(SendEmailVerificationNotification::class)); public function boot() { } }
