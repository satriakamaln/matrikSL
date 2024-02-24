<?php

namespace App\Http\Controllers;

use App\Models\RefProgram;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = RefProgram::paginate(20);
        return view('programs.index', compact('programs'));
    }
}
