<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListasController extends Controller
{
    public function index(){

        return view('listas.index');
    }

    public function add(){

        return view('listas.add');
    }
}