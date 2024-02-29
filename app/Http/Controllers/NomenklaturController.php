<?php

namespace App\Http\Controllers;

use App\Models\RefBidang;
use App\Models\RefProgram;
use Illuminate\Http\Request;

class NomenklaturController extends Controller
{
    public function indexProgram()
    {
        $programs = RefProgram::paginate(20);
        return view('nomenklatur.programs', compact('programs'));
    }
    public function indexBidang()
    {
        $bidangs = RefBidang::paginate(20);
        return view('nomenklatur.bidangs', compact('bidangs'));
    }
}
