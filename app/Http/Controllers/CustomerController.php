<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Routing\ControllerMiddlewareOptions
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        return view('customers');
    }
}
