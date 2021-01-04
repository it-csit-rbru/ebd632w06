<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Research;

class ResearchController extends Controller
{
    public function index(){
        $researchs = Research::all();
        return view('research/index',compact('researchs'));
    }
}
