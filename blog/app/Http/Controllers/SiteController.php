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

        if($request->UserType == 0){

            $user = User::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'celular' => $request->celular,
                'acesso' => $request->UserType
            ]);

            return redirect('home');
        }
        
        $user = User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'celular' => $request->celular,
            'acesso' => $request->UserType
        ]);

        $league = League::create([
            'nome' => $request->nomeliga,
            'cidade' => $request->cidadeliga,
            'estado' => $request->estado
        ]);

        return redirect('home');
    }

    public function calendario(){

        $leagues = League::all();

        return view('site.calendario', compact('leagues'));
    }

    public function formatos(){

        return view('site.formatos');
    }

    public function links(){

        return view('site.links');
    }
}
