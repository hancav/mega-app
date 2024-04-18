<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Debugbar;

final class DashboardController extends Controller
{
    /**
     * Home method
     *
     **/
    public function index(): void
    {
        // define view name
        $view = 'templates.dashboard';
        // debugbar
        Debugbar::info($view);

        // return view
        return view($view);
    }
}
