<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Show the projects page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function projects()
    {
        return view('pages.projects');
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
