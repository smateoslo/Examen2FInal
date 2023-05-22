<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corporation;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin(){
        $id = DB::select(['select corporation_id from corporation_user where fechainicio > 2023-01-01 ']);
        $corporation = Corporation::all();
        if($id == $corporation->id){
            $corporations = Corporation::all();
        }
        return view ('admin', compact('corporations'));
    }
}
