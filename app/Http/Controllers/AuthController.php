<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AuthController extends Controller
{
    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);
    //     $data = $request->all();
    //     $check = $this->create($data);
    //     return redirect("login")->withSuccess('You have signed-in');
    // }




    public function add(Request $request)
    {

        $validate = $request->validate([

            'name' => 'required|max:150',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();

        // $film->id=$request['id']; inutile
        $user->name = $validate['name'];
        $user->email = $validate['email'];
        $user->password = Hash::make($validate['password']);
        $user->save();


        return redirect()->route('login');
    }


    public function loginform()
    {
        return view('login');
    }


    public function login(Request $request)

    {
        $validate = $request->validate([

            'email' => 'required',
            'password' => 'required',

        ]);

        $user = User::where('email', '=', $validate['email'])
            ->first();
        if (
            isset($user) &&

            Hash::check($validate['password'], $user->password)
        ) {

            session(['user' => $user]);
            return redirect()->route('Films');
        } else {
            return redirect()->route('connexion');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
