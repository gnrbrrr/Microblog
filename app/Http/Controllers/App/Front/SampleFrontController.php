<?php

namespace App\Http\Controllers\App\Front;

use App\Services\SampleUserService;

/**
 * Class SampleFrontController
 * @package App\Http\Controllers\App\Front
 * @author Kenneth Chan <kenneth@simplexi.com>
 * @since 12/4/2018 9:43 AM
 */
class SampleFrontController
{
    public function sample(SampleUserService $oUserService)
    {
        return view('welcome');
    }
}
