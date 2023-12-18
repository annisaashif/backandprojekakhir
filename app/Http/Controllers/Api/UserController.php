<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;  //baris yg ditambahkan
use Illuminate\Http\Request;
use App\Models\User; // Tambahkan impor model Tempat jika belum ada

class UserController extends Controller
{
    public function login(Request $requset){
        //dd($requset->all());die();
        $user = User::where('email', $requset->email)->first();
   
   
        if($user){
            if(password_verify($requset->password, $user->password)){
                return response()->json([
                    'success' => 1,
                    'message' => 'Selamat datang '.$user->name,
                    'user' => $user
                ]);
            }
            return $this->error('Password Salah');
            
        }
        return $this->error('Email tidak terdaftar');
    }
   
    public function register(Request $requset){
        //nama ,email ,password
        $validasi = Validator::make($requset->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);
   
        if($validasi->fails()){
            $errors = $validasi->errors()->all();
            return $this->error($errors[0]);
        }
   
        $user = User::create(array_merge($requset->all(), [
            'password' => bcrypt($requset->password)
        ]));
   
        if($user){
            return response()->json([
                'success' => 1,
                'message' => 'Selamat datang Register Berhasil',
                'user' => $user
            ]);
        }
   
        return $this->error('Registrasi Gagal');
   
    }
    public function error($pasan){
        return response()->json([
            'success' => 0,
            'message' => $pasan
        ]);
   
    }
}
