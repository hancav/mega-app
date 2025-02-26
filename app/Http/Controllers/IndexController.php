<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Debugbar;
use App\Services\VersionService;

final class IndexController extends Controller
{
    /**
     * Home method
     *
     **/
    public function index()
    {
        // define view name
        $view = 'welcome';
        // debugbar
        $version = app(VersionService::class)->getCurrentVersion();
        Debugbar::info('Version: '.$version);
        // return view
        return view($view);
    }
}
