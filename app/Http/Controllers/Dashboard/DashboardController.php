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
  public function home(){
    // define view name
    $view = 'dashboard';
    // debugbar
    Debugbar::info($view);
    // return view
    return view($view);
  }

}
