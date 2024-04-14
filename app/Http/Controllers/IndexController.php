<?php

namespace App\Http\Controllers;

use Debugbar;

class IndexController extends Controller
{
    /**
     * Home method
     *
     **/
    public function index()
    {
        // define view name
        $view = 'templates.index';
        // debugbar
        Debugbar::info($view);

        // return view
        return view($view);
    }
}
