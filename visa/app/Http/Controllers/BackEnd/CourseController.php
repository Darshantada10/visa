<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        //         $course = Course::find(2);
        // dd($course);
        return view("BackEnd.Courses.index");
    }
    public function create()
    {
        return view("BackEnd.Courses.create");
    }
    public function edit($id)
    {
        return view("BackEnd.Courses.edit",compact('id'));
    }
    public function edit_course($id)
    {
        $course = Course::with('universities')->findOrFail($id);
        return response()->json([$course]);
    }
    public  function university()
    {
        $university = University::select('id','university_name','campus')->get();
        return response()->json($university);
    }
    public function display()
    {
        $course = Course::select('courses.id', 'courses.university_id', 'courses.course_title', 'courses.fee', 'courses.duration', 'courses.campus', 'universities.university_name')
    ->join('universities', 'courses.university_id', '=', 'universities.id')
    ->get();

        // $course = Course::select('id','university_id','course_title', 'fee','duration','campus')->get();
        // $course = Course::find(2);
        // dd($course->universities->university_name);
        // $university = University::where('id',$course[1]->id)->get();
        // dd($university);
        // dd($course);
        // dd($course[2]->id);

        return response()->json($course);
    }
    public function store(CourseRequest $request,Course $course)
    {
        $coursedata = $request->validated();

       $response =  $course->create([
            "university_id" => $coursedata["university_id"] ,
            "course_title" => $coursedata["course_title"] , 
            "campus" => $coursedata["campus"] ,
            "duration" => $coursedata["duration"] ,
            "fee" => $coursedata["fee"] ,
            "other_fee" => $coursedata["other_fee"] ,
        ]);
        
        if($response)
        {
            return redirect('/partner/all-courses')->with('status','Course Added Successfully');
        }
        else 
        {
            return response()->json(['message' => 'Failed to save course'], 500); 
        }
    }
    public function update($id,CourseRequest $request)
    {
        $coursedata = $request->validated();

        $course = Course::where('id',$id)->first();

        $response =  $course->update([
            "university_id" => $coursedata["university_id"] ,
            "course_title" => $coursedata["course_title"] , 
            "campus" => $coursedata["campus"] ,
            "duration" => $coursedata["duration"] ,
            "fee" => $coursedata["fee"] ,
            "other_fee" => $coursedata["other_fee"] ,
        ]);
        
        if($response)
        {
            return redirect('/partner/all-courses')->with('status','University Updated Successfully');
        }
        else 
        {
            return response()->json(['message' => 'Failed to update university'], 500); 
        }
    }

    public function delete($id)
    {
        // dd($id);
        $delete_courses = Course::findorfail($id);
        $delete_courses->delete();
        return response()->json(['message' => 'Course Deleted Successfully']); 

    }
}
