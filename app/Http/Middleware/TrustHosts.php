<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-07-23 08:44:20              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Http\Middleware\TrustHosts as Middleware; class TrustHosts extends Middleware { public function hosts() { return [$this->allSubdomainsOfApplicationUrl()]; } }
