<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();

        return view('profil', [
            'title' => 'Profil',
            'user' => $user
        ]);
    }

    public function edit()
    {
        $user = Profile::where('id_user', auth()->user()->id)->first();

        return view('profil', [
            'title' => 'Profil',
            'user' => $user->nama
        ]);
    }

    public function update(User $user, Request $request)
    {
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_rekening' => $request->no_rekening,
            'updated_at' => now()
        ]);

        return $this->success('profile','Profile berhasil diperbarui');
    }

}
