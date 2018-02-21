<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
    function adminLayout(){
        $admins = DB::select("Select * from admin");
        $data = [
            'admin' => $admins
        ];
        return view('admin/adminLayout', $data);
    }
}