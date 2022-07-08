<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loginuser;
use App\Models\Addressuser;
 use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $a=Loginuser::with('UserDetails')->get();
  
        
        return view('index',compact('a'));
         
    }
}
