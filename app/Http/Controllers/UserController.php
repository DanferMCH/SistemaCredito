<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        $users = User::all();
        return view('registrar', compact('users'));
    }

    public function store(StoreUser $request)
    {
        $login =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('user.create');
    }

    public function auth(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('principal');
        }else{
            return redirect()->back()->with('error', 'Las credenciales proporcionadas son incorrectas. Por favor, inténtalo de nuevo.');
        }
    }
    public function search($id){
        $user = User::find($id);
        return response()->json([
            "name" => $user->name,
            "email" => $user->email
        ]);
    }
    public function update(UpdateUser $request){

        $id = $request->idActualizarUsuario;
        $usuario = User::find($id);

        $usuario->update([
            'name' => $request->ActualizarUsuarioNombreCompleto,
            'email' => $request->ActualizarUsuarioEmail,
            'password' => Hash::make($request->ActualizarUsuarioPassword),
        ]);

        return redirect()->route('user.create');
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->route('user.create');
    }
}
