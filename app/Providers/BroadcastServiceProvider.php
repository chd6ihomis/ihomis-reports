<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-07-23 08:44:20              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Providers; use Illuminate\Support\Facades\Broadcast; use Illuminate\Support\ServiceProvider; class BroadcastServiceProvider extends ServiceProvider { public function boot() { Broadcast::routes(); require base_path('routes/channels.php'); } }
