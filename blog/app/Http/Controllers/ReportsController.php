<?php

namespace App\Http\Controllers;

use App\League;
use App\User as UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    public function index(UserModel $userModel){

        $leagues = League::all();
        // $user = Auth::id();
        $userModel = $userModel->find(Auth::id());
        //$leagueAdm = $userModel->leagues()->where('id', '=', Auth::id());

        return view('reports.index', compact('leagues','userModel'));
    }

    public function create(UserModel $userModel){

        $leagues = League::all();

        $userModel = $userModel->find(Auth::id());

        if (Auth::check()) {

            $leagueAdm = $userModel->leagues()->where('id', '=', Auth::id());

            $league = League::where(['id' => Auth::id()])->get();

            //dd($league);

            return view('reports.add', compact('leagues','userModel', 'leagueAdm', 'league'));
        }
        $leagueAdm = false;

        return view('reports.add', compact('leagues','userModel', 'leagueAdm'));
    }
}