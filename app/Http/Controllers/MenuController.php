<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller {
    public function __construct(){
        $this->middleware('auth');
   }
    
   public function adminIndex(){
       return view ('menu/admin/index');
   }
}
