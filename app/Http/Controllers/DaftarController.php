<?php

namespace App\Http\Controllers;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DaftarController extends Controller
{
    public function daftar(){
        return view('daftar');
    }


    public function simpan(Request $request) {

    $name     = $request->name;
    $email    = $request->email;
    $password = $request->password;

    $user = new User();
    $user->name     = $name;
    $user->email    = $email;
    $user->password = Hash::make($password);

    try {

        if ($user->save()) {
            Session::flash('success', 'Berhasil simpan user');
        } else {
            Session::flash('danger', 'Gagal simpan user');
        }

    } catch (Exception $e) {
        Session::flash('danger', 'Gagal simpan user');
    }

    return redirect('/login')->with('danger', 'pendaftaran berhasil');
}
}