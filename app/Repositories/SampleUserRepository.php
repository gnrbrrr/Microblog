<?php

namespace App\Repositories;

use App\Models\User;

/**
 * Class SampleUserRepositories
 * @package App\Repositories
 * @author Kenneth Chan <kenneth@simplexi.com>
 * @since 12/4/2018 9:45 AM
 */
class SampleUserRepository
{
    /** @var User Model */
    private $oUserModel;

    /**
     * SampleUserRepositories constructor.
     * @param User $oUserModel
     */
    public function __construct(User $oUserModel)
    {
        $this->oUserModel = $oUserModel;
    }

    public function getAllUsers()
    {
        return $this->oUserModel->all();
    }
}