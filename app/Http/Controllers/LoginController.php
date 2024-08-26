<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function index(){
        return view('login', ['title' => 'Login']);
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd($credential);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('dashboard');
    }

    public function settings(){
        return view('settings');
    }

    public function updateUser(Request $request){
        $validateData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'password_new' => '',
            'password_new_confirm' => '',
        ]);

        if($validateData['password_new'] == $validateData['password_new_confirm']){
            $user = User::find(Auth::user()->id);

            if($validateData['password_new'] != null){
                $validateData['password'] = Hash::make($validateData['password_new']);
            } 

            $user->fill($validateData);
            $user->save();
            return redirect()->route('settings')->with('success', 'Data berhasil diubah');
        } else {
            return 'password tidak sama';
        }

        return redirect()->back()->with('loginError', 'Password tidak sama');
    }
}
