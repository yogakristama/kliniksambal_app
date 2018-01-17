<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getContent()
    {
        $content = session()->get('cart_content');
        return response()->json($content);
    }

    public function addContent(Request $request)
    {

        $id = $request->input('id');
        session()->push('cart_content',$id);

        return "ok";
    }
}