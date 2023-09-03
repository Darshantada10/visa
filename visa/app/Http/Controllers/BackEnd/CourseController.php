<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view("BackEnd.Courses.index");
    }
    public function create()
    {
        return view("BackEnd.Courses.create");
    }
    public function edit()
    {
        return view("BackEnd.Courses.edit");
    }
}
