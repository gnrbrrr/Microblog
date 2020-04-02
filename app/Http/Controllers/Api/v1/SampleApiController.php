<?php

namespace App\Http\Controllers\Api\v1;

use App\Repositories\SampleUserRepository;

/**
 * Class SampleApiController
 * @package App\Http\Controllers\Api\v1
 * @author Kenneth Chan <kenneth@simplexi.com>
 * @since 12/4/2018 9:50 AM
 */
class SampleApiController
{
    public function test(SampleUserRepository $oUserRepository)
    {
        $oUserList = $oUserRepository->getAllUsers();
        return response()->json($oUserList);
    }
}