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
            <form action="{{url('/partner/add-courses')}}" method="post" id="course_form"                   
            onsubmit="event.preventDefault(); savecourses({{$id}})">
                @csrf
                <div class="mb-3" >
                    <label for="university" class="form-label">Select University</label>

                    <select id="select_university" class="form-select" name="university_id">

                    </select>

                  </div>
                <div class="mb-3" >
                    <label for="campus" class="form-label">Select campus</label>

                    <select  class="form-select" name="campus">
                        <option value="" id="campus"></option>
                    </select>

                  </div>
                  
                 {{-- <div id="edit_course_data">

                 </div> --}}
               
                 <div class="mb-3 mt-3">
                    <label for="course_title">Course Title</label>
                    <input type="text" name="course_title" id="course_title" value="" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="fee">Fee</label>
                    <input type="text" name="fee" id="fee" value="" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="other_fee">Other Fee</label>
                    <input type="text" name="other_fee" id="other_fee" value="" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="duration" class="form-label">Select duration</label>
                    <select class="form-select" name="duration" id="duration">
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
//     function select_university()
// {
//     fetch("http://localhost:8000/api/course-universities").then((res)=>res.json()).then((response)=>
//     {
//         var select_university = "";
//         var select_campus = "";
//         console.log(response);
//         // console.log(response.university_name);
//         response.forEach(data => 
//         {
//             select_university += `
          
//                       <option value="${data.id}">${data.university_name}</option>
                      
//             `    
//         });
//         response.forEach(data => 
//         {
//             select_campus += `
          
//                       <option value="${data.campus}">${data.campus}</option>
                      
//             `    
//         });
//         document.getElementById("select_university").innerHTML = select_university
//         document.getElementById("select_campus").innerHTML = select_campus
//     })
// }
// select_university();
function get_course_data() {
    var id = {!! $id !!};
    fetch("http://localhost:8000/api/edit-courses/" + id)
        .then((res) => res.json())
        .then((response) => {
            console.log(response);

            // Check if response has the expected structure
            if (Array.isArray(response) && response.length === 2) {
                var courseData = response[0];
                var universitiesData = response[1];
                console.log("courseData");
                console.log(courseData);
                console.log("universitiesData");
                console.log(universitiesData);

                // Assuming your form fields have IDs like "course_title", "fee", etc.
                document.getElementById("course_title").value = courseData.course_title;
                document.getElementById("fee").value = courseData.fee;
                document.getElementById("other_fee").value = courseData.other_fee;
                document.getElementById("duration").value = courseData.duration;
                // document.getElementById("campus").value = courseData.campus;
                console.log(document.getElementById("campus").value = `<option value="${courseData.campus}">${courseData.campus}</option>`)
                // ... Populate other form fields similarly

              // Assuming you have select elements with IDs "select_university" and "select_campus" for your dropdowns
var selectUniversityDropdown = document.getElementById("select_university");
var selectCampusDropdown = document.getElementById("select_campus");

// Generate the dropdown options for universities
var universitiesOptions = universitiesData.map((university) => {
    // Check if the current university ID matches the course's university_id
    var isSelected = university.id === courseData.university_id ? 'selected' : '';
    
    return `<option value="${university.id}" ${isSelected}>${university.university_name}</option>`;
});

// Generate the dropdown options for campuses independently, without checking for selection
var campusesOptions = universitiesData.map((university) => {
    return `<option value="${university.campus}">${university.campus}</option>`;
});

// Set the innerHTML of the select elements to the generated options
selectUniversityDropdown.innerHTML = universitiesOptions.join('');
selectCampusDropdown.innerHTML = campusesOptions.join('');

                // Assuming you have a select element with ID "select_course" for your course dropdown
                var selectCourseDropdown = document.getElementById("select_course");

                // Generate the dropdown options for courses
                var coursesOptions = coursesData.map((course) => {
                    // Check if the current course ID matches the originally selected course ID
                    var isSelected = course.id === courseData.id ? 'selected' : '';
                    
                    return `<option value="${course.id}" ${isSelected}>${course.course_title}</option>`;
                });

                // Set the innerHTML of the course select element to the generated options
                selectCourseDropdown.innerHTML = coursesOptions.join('');

                // Your code to populate form fields and dropdowns based on courseData and universitiesData
            } else {
                console.error('Invalid response structure');
            }
        });
}

get_course_data();

function savecourses(id)
    {
        var university_data = {};
    $.each($('#course_form').serializeArray(), function() 
    {
        university_data[this.name] = this.value;
    });


        console.log(id);
        console.log(university_data);
        fetch("http://localhost:8000/api/edit-courses/"+id, 
    {
        method: "POST",
        mode: "cors",
        headers: 
        {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(university_data), 
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
    }
</script>
@endsection