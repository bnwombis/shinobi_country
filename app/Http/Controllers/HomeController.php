<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        return $request->user() ? view('dashboard', ["countries" => Country::all()]) : view('auth.login');
    }

}
