<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Profesional;
use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    /*public function ingresar(User $user){
        return view('registroprofe');
    }*/
    public function mostrar(){
        $profesional = new Profesional();
        $verprofe = $profesional::join('users', 'profesionals.id_usuario', '=','users.id' )->get();
        return view("verprofe", ["verprofe"=>$verprofe]);
        /*$profesional = new Profesional();
        $verprofe = $profesional::where('profesionals.id_usuario', '=', 'users.id')
                                ->join('users', 'profesionals.id_usuario', '=','users.id')
                                ->get();
        return view("verprofe", ['verprofe'=>$verprofe]);*/
    }

    public function categorias(){
        $categorias = new Profesional();
        $vercate = $categorias::get();
        return view("vercate", ["vercate"=>$vercate]);
    }

    public function store(Request $request){
        Profesional::create([
            'id_usuario'=>auth()->id(),
            'usuario' => $request->usuario,
            'edad' => $request->edad,
            'telefono' => $request->telefono,
            'categoria' => $request->categoria,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('home');
    }
    public function destroy(){
        
    }
}
