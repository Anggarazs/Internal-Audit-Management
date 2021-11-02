<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorrectiveController extends Controller
{
    public function index(){
        return view('corrective.corrective_index');
    }
}
