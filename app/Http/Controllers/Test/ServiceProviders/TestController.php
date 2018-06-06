<?php

namespace App\Http\Controllers\Test\ServiceProviders;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\TestContract;
use App\Services\TestService;

class TestController extends Controller
{
    //


    /**
     * TestController constructor.
     */
    public function __construct(TestContract $test)
    {
        $this->test = $test;
    }

    /**/
    public function index(TestService $service){

        //dd('11111');

        $this->test->callMe('TestController');

       // $service->callMe('TestController');

    }

}
