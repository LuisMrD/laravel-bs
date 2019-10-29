<?php

namespace App\Http\Controllers;

use App\User;
use App\League;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        return view('site.index');
    }

    public function login(){

        return view('site.login');
    }

    public function store(Request $request){

        if($request->userType === 0){

            return redirect('index');
        }
        
        $user = User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'celular' => $request->celular,
            'acesso' => $request->UserType,
            'status' => $request->statusadm
        ]);

        $league = League::create([
            'nome' => $request->nomeliga,
            'cidade' => $request->cidadeliga,
            'estado' => $request->estado
        ]);

        return view('site.index');
    }

    public function calendario(){

        return view('site.calendario');
    }

    public function formatos(){

        return view('site.formatos');
    }

    public function links(){

        return view('site.links');
    }
}
