@extends('layouts.backend.app')



@section('content')

<div class="card">
    <div class="card-header">
        <h3>
            Add Courses
              <a href="{{url('/partner/all-courses')}}" class="btn btn-primary float-end">Back </a>
        </h3>
    </div>
    <div class="card-body">
            <form action="{{url('/partner/add-courses')}}" method="post" id="course_form"                   onsubmit="event.preventDefault(); savecourse()">
                @csrf
                <div class="mb-3" >
                    <label for="university" class="form-label">Select University</label>

                    <select id="select_university" class="form-select" name="university_id">

                    </select>

                  </div>
                <div class="mb-3" >
                    <label for="campus" class="form-label">Select campus</label>

                    <select id="select_campus" class="form-select" name="campus">

                    </select>

                  </div>
                  
                  <div class="mb-3 mt-3">
                    <label for="course_title">Course Title</label>
                    <input type="text" name="course_title" class="form-control" required >
                </div>
                <div class="mb-3">
                    <label for="fee">Fee</label>
                    <input type="text" name="fee" class="form-control" required >
                </div>
                <div class="mb-3">
                    <label for="other_fee">Other Fee</label>
                    <input type="text" name="other_fee" class="form-control" required >
                </div>
                
                <div class="mb-3" >
                    <label for="duration" class="form-label">Select duration</label>

                    <select  class="form-select" name="duration">
                        <option value="6_months">6 Months</option>
                        <option value="1_year">1 year</option>
                        <option value="1_year_6_months">1 year 6 Months</option>
                        <option value="2_year">2 year</option>

                    </select>

                  </div>
               
    
                  <button class="btn btn-success btn-lg">Save</button>

            </form>
    </div>
</div>



<script>

function select_university()
{
    fetch("http://localhost:8000/api/course-universities").then((res)=>res.json()).then((response)=>
    {
        var select_university = "";
        var select_campus = "";
        console.log(response);
        // console.log(response.university_name);
        response.forEach(data => 
        {
            select_university += `
          
                      <option value="${data.id}">${data.university_name}</option>
                      
            `    
        });
        response.forEach(data => 
        {
            select_campus += `
          
                      <option value="${data.campus}">${data.campus}</option>
                      
            `    
        });
        document.getElementById("select_university").innerHTML = select_university
        document.getElementById("select_campus").innerHTML = select_campus
    })
}
select_university();

function savecourse(pid) 
    {
    console.log("called course form");
    var course_data = {};
    $.each($('#course_form').serializeArray(), function() 
    {
        course_data[this.name] = this.value;
    });
    console.log("course_data", course_data);
    fetch("http://localhost:8000/api/add-courses", 
    {
        method: "POST",
        mode: "cors",
        headers: 
        {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(course_data), 
    })
    .then((response) => 
    {
        if (response.redirected) 
        {
            window.location.href = response.url;
        }
        return response.json();
    })
    .then((responseData) => 
    {
        console.log("message check", responseData);
    });
    // .catch((error) => {
    //     console.error("Error:", error);
    // });
}
</script>
@endsection