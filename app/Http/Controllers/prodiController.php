<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodiController extends Controller
{
   public function index(){
    return view('backend.prodi.view_prodi');
   }
}