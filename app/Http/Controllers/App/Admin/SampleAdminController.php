<?php

namespace App\Http\Controllers\App\Admin;

use App\Services\SampleUserService;

/**
 * Class SampleAdminController
 * @package App\Http\Controllers\App\Admin
 * @author Kenneth Chan <kenneth@simplexi.com>
 * @since 12/4/2018 9:43 AM
 */
class SampleAdminController
{
    public function sample(SampleUserService $oUserService)
    {
        return view('admin')->with('data', $oUserService->test());
    }
}
