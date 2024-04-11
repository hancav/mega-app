<?php
namespace App\Http\Controllers;

class IndexController extends Controller
{
  /**
  * Index method
  *
  **/
  public function home(){
    // define view name
    $view = 'welcome';
    // debugbar
    \Debugbar::info($view);
    // return view
    return view($view);
  }

}
