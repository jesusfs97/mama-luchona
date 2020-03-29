<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($id)
    {
        // dd();
        $user = User::findOrFail($id);
        $this->authorize($user);
        return view('Usuarios.Editar', compact('user'));
    }
    public function update(Request $request, $id)
    {      
        $validar = $request->validate([
            'nombre' => 'required',
            'correo' => 'required | unique:users,email,'.$id,

        ]);

        
        $user = User::findOrFail($id);
        $this->authorize($user);
        $user->name = $request->nombre;
        $user->email = $request->correo;
        $user->update();
        return redirect('/')->with('exito','Cuenta Actualizada');
    }
}
