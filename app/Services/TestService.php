<?php

/**
 * Created by PhpStorm.
 * User: hanjin
 * Date: 2018/3/22
 * Time: 下午5:38
 */
namespace App\Services;
use App\Contracts\TestContract;

class TestService implements TestContract
{
    public function callMe($controller)
    {
        dd('Call Me From TestServiceProvider In '.$controller);
    }
}