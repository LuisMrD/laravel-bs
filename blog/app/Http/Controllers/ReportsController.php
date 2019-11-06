<?php

namespace App\Http\Controllers;

use App\League;
use App\Player;
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

    public function add(UserModel $userModel){

        $events = Event::all();

        $players = Player:all();

        $userModel = $userModel->find(Auth::id());

        if (Auth::check()) {

            $leagueAdm = $userModel->leagues()->where('id', '=', Auth::id());

            $event = Event::where(['league_id' => Auth::id()])->get();

            //dd($league);

            return view('reports.add', compact('events','userModel', 'leagueAdm', 'event','players'));
        }
        $leagueAdm = false;

        return view('reports.add', compact('events','userModel', 'leagueAdm'));
    }
}