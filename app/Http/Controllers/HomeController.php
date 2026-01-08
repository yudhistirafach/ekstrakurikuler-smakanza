<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $extracurriculars = Extracurricular::inRandomOrder()->take(4)->with('category')->get();

        return view('pages.home', compact('extracurriculars'));
    }
}
