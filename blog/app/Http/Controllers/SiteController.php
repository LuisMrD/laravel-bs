<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

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
