<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Debugbar;

final class IndexController extends Controller
{
    /**
     * Home method
     *
     **/
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        // define view name
        $view = 'welcome';
        // debugbar
        if (config('app.env') === 'local') {
            Debugbar::info('Version:'.app('services')->getCurrentVersion());
        }

        // return view
        return view($view);
    }
}
