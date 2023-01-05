<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }


    public function create(Request $request){
        // cek data username dan password
        $email = $request->post('email');
        $password = $request->post('password');
        $passwordMd5 = md5($password);

        $data = User::where("email","=",$email)->first();
        if($data){ //"$data->password" akan mengambil nilai dari password yang tersimpan dalam objek "$data".
            if($passwordMd5 == $data->password){
                session(['login'=> true]);
                session(['name'=> $data->name]);
                // echo "Anda berhasil login";
            } else {
                echo "password anda salah";
            }
        } else {
            echo "Username dan password anda salah";
        }

        return redirect('form_barang');
    }

    public function jikaLogin(){
        if(session()->has('login')){
            $nama = session('name');
            // echo "Halo $nama, Anda sudah login";
        } else { 
            // echo "Anda blm login"; 
            return redirect('login');
        }
    }

    public function destroy(){

        // cek data username dan password

        session()->forget('login');

        return redirect('login');
    }
}