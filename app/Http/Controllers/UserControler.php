<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lavel;


class UserControler extends Controller
{
    public function mostrar(){
        $users = User::all();
        $lavels = Lavel::all();
        return view('student.index', compact('users', 'lavels'));
     }
     public function nuevoAlumno(){
        return view('student.create');
     }
     public function crearAlumno(Request $request){

        $validatedData = $request->validate([
            'phone' => ['required', 'min:9', 'integer'],
            'gender' => ['required', in(['male', 'female']),],
            'email' => ['required'],
            'name' => ['required', 'string', 'max:20'],
            'dni' => ['required', 'string'],
            'adress' => ['required', 'string', 'max:40'],
            'birth_date' => ['required', 'date', 'before:2007-01-01'],
            ]);


        User::create($request->all());
        return redirect('/');
     }
}
