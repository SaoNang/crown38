<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pos extends Controller
{
    public function PosIndex(){
        return view('Sales.Pos');
    }
}
