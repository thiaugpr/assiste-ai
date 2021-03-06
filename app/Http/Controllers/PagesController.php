<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Show home page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }
}
