<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        return view("BackEnd.Universities.index");
    }
    public function create()
    {
        return view("BackEnd.Universities.create");
    }
}
