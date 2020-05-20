<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index() {
        $usuarios = Usuario::all();
        return view('user.list', ['usuarios' => $usuarios]);
    }

    public function edit($id) {
        $usuario = Usuario::select(['id','firstname','lastname'])
                            ->where('id',$id)
                            ->get();
        return view('user.edit', compact('usuario'));
    }
}
