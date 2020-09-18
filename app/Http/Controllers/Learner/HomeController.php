<?php

namespace App\Http\Controllers\Learner;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/learner/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('learner.auth:learner');
    }

    /**
     * Show the Learner dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('learner.home');
    }

}