<?php

namespace App\Http\Controllers;

use App\User;
use App\User as UserModel;
use App\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function calendario(UserModel $userModel){

        $leagues = League::all();
        // $user = Auth::id();
        $userModel = $userModel->find(Auth::id());
        
        $leagueUser = $userModel->leagues();
        dd($leagueUser);
        return view('site.calendario', compact('leagues','user'));
    }

    public function formatos(){

        return view('site.formatos');
    }

    public function links(){

        return view('site.links');
    }
}
