<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class RegisterController extends Controller
{

    public function index()
    {
        //dd("#para mostrar un mensaje");
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $request->request->add(["username" => Str::slug($request->username)]); //Se utiliza para que valida que no exista en la base de datos

        $this->validate($request, [
            'name' => 'required | max:30',
            'username' => 'required |unique:users|min:3|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6' //Con confirmed podemos encriptar la contraseña
        ]);

        User::create([
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password)
            // "password"=> bcrypt($request->password)
        ]);
        return redirect()->route("register.index");
        // dd("Inserte los datos del formulario");  
    }


}
