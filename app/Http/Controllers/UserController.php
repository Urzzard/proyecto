<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mostrar(User $users){
        $usuario = new User();
        $verperfil = $usuario::where('users.id', '=', auth()->id())->get();
        return view("perfilusuario", ["verperfil"=>$verperfil]);
    }
}
