<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Class VerifyHmac
 * To Verify the integrity of incoming data from cafe24
 * @package App\Http\Middleware
 * @author Mark Angelo Muncada <mark04@simplexi.com.ph>
 * @since 20 Aug 2019
 */
class VerifyHmac
{
    /**
     * Handle an incoming request.
     * @param $oRequest
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $oRequest, Closure $next)
    {
        /** APP_ENV key from .env file */
        $sEnvironment = config('app.env');

        /** Skip the verification in Local env*/
        if ($sEnvironment === 'local') {
            return $next($oRequest);
        }

        /** Retrieve Request data, unset HMAC then convert to URL Encoded Query */
        $aParams = $oRequest->all();
        $sHmac = data_get($aParams, 'hmac');
        unset($aParams['hmac']);
        $sQuery = http_build_query($aParams);

        /** APP_CLIENT_SECRET key from .env file */
        $sClientSecret = config('cafe24.client_secret');
        $sHmacValidator = base64_encode(hash_hmac('SHA256', $sQuery, $sClientSecret, true));

        if ($sHmac !== $sHmacValidator) {
            abort(403);
        }

        return $next($oRequest);
    }
}
