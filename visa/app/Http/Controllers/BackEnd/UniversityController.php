<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\UniversityRequest;
use App\Models\University;
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
    public function edit($id)
    {
        return view("BackEnd.Universities.edit",compact('id'));
    }

    public function edit_university($id)
    {
         $university = University::findorfail($id);
         return response()->json([$university]);
    }
    public function display()
    {
        $university = University::select('id','university_name','institution_type', 'fees','ielts','ranking')->get();
        return response()->json($university);
    }
    public function store(UniversityRequest $request,University $university)
    {
        $universitydata = $request->validated();

       $response =  $university->create([
            "university_name" => $universitydata["university_name"] ,
            "institution_type" => $universitydata["institution_type"] , 
            "campus" => $universitydata["campus"] ,
            "moi" => $universitydata["moi"] ,
            "last_percentage" => $universitydata["last_percentage"] ,
            "fees" => $universitydata["fees"] ,
            "ielts" => $universitydata["ielts"] ,
            "deadline" => $universitydata["deadline"] ,
            "admission_document" => $universitydata["admission_document"] ,
            "accreditation" => $universitydata["accreditation"] ,
            "ranking" => $universitydata["ranking"] 
        ]);
        
        if($response)
        {
            return redirect('/partner/all-universities')->with('status','University Added Successfully');
        }
        else 
        {
            return response()->json(['message' => 'Failed to save university'], 500); 
        }
    }
    public function update($id,UniversityRequest $request)
    {
        $universitydata = $request->validated();

        $university = University::where('id',$id)->first();

        $response =  $university->update([
            "university_name" => $universitydata["university_name"] ,
            "institution_type" => $universitydata["institution_type"] , 
            "campus" => $universitydata["campus"] ,
            "moi" => $universitydata["moi"] ,
            "last_percentage" => $universitydata["last_percentage"] ,
            "fees" => $universitydata["fees"] ,
            "ielts" => $universitydata["ielts"] ,
            "deadline" => $universitydata["deadline"] ,
            "admission_document" => $universitydata["admission_document"] ,
            "accreditation" => $universitydata["accreditation"] ,
            "ranking" => $universitydata["ranking"] 
        ]);
        
        if($response)
        {
            return redirect('/partner/all-universities')->with('status','University Updated Successfully');
        }
        else 
        {
            return response()->json(['message' => 'Failed to update university'], 500); 
        }
    }


    public function delete($id)
    {
        // dd($id);
        $delete_university = University::findorfail($id);
        $delete_university->delete();
        return response()->json(['message' => 'University Deleted Successfully']); 

    }
}
