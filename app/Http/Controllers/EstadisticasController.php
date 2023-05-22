<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lavel;
use App\Models\Corporation;
use Illuminate\Support\Facades\DB;

class EstadisticasController extends Controller
{
    public function mediaCentro(){

        $centro = Lavel::get('name');
        $valoraciones = DB::table('corporation_user')->select('valoracionbescentro')->get();


        $mediaCentro = $valoraciones /count($cento);



        $empresa = Corporation::get('name');
        $valoraciones = DB::table('corporation_user')->select('valoracionesalumno')->get();

        $mediaEmpresa = $valoraciones /count($empresa);

        

        return view('estadisticas', compact('mediaCentro', 'mediaEmpresa') );
    }
}
