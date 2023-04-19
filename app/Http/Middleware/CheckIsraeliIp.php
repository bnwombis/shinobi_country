<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GeoIp2\Database\Reader;

class CheckIsraeliIp
{
    public function handle(Request $request, Closure $next)
    {
        $clientIp = $request->ip();

        if ($clientIp !== '127.0.0.1' && !$this->isIsraeliIp($clientIp)) {
            return response('Access denied. This service is limited to Israeli IP addresses only.', 403);
        }

        return $next($request);
    }

    private function isIsraeliIp($ip)
    {
        $databasePath = storage_path('app/geoip/GeoLite2-Country.mmdb');

        try {
            $reader = new Reader($databasePath);
            $record = $reader->country($ip);

            return $record->country->isoCode === 'IL'; // 'IL' is the ISO code for Israel
        } catch (\Exception $e) {
            // In case of any error (e.g., IP address not found), you can choose to deny access
            return false;
        }
    }
}