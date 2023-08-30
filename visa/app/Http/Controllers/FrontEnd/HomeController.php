<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view("FrontEnd.Home.index");
    }


    public function logos()
    {
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        return response()->json([$logos]);
    }

    public function navbars()
    {
        $navbars = Navbar::select('navbar')->get();
        return response()->json($navbars);

    }
}
