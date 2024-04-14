<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Debugbar;

class DashboardController extends Controller
{
    /**
     * Home method
     *
     **/
    public function index()
    {
        // define view name
        $view = 'templates.dashboard';
        // debugbar
        Debugbar::info($view);

        // return view
        return view($view);
    }
}
