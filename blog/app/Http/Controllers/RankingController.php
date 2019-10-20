<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index(){

        return view('ranking.index');
    }

    public function add(){

        return view('ranking.add');
    }
}