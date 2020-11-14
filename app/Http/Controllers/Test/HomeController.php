<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/test/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('test.auth:test');
    }

    /**
     * Show the Test dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('test.home');
    }

}