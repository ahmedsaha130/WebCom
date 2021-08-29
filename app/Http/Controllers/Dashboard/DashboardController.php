<?php


namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

     public function index()
     {
         return view('dashboard.dashboard');
     }
    //  public function my_profile()
    //  {
    //      return view('dashboard.myprofile.myprofile');
    //  }
     public function my_account_setting()
     {
         return view('dashboard.myprofile.account_setting');
     }
}
