<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Model_Pos;

class Pos extends Controller
{
    public function PosIndex(){
        $product_list = DB::table('pos')->get();
        return view('Sales.Pos',compact('product_list'));
    }
}
