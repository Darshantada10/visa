@extends('layouts.backend.app')



@section('content')

<div class="card">
    <div class="card-header">
        <h3>
            All Courses
              <a href="{{url('/partner/add-courses')}}" class="btn btn-primary float-end">Add Courses </a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>University Name</th>
                    <th>Course Title</th>
                    <th>Fees</th>
                    <th>Duration</th>
                    <th>Campus</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody id="courses_data">
              
            </tbody>

        </table>
    </div>
</div>

<script>
    function getallcourse()
    {
        fetch("http://localhost:8000/api/all-courses").then((res)=>res.json()).then((response)=>
        {
            // console.log("data ",response);
            if(response.length == 0)
            {
                htmltabledata = `  <tr>
                    <th style="text-align: center;" colspan="7">No Data Found</th>
                    </tr>`
            }
            else
            {
                htmltabledata = ""
            response.forEach(data => {
                htmltabledata += `<tr>
                <td>${data.id}</td>
                <td>${data.university_name}</td>
                <td>${data.course_title}</td>
                <td>${data.fee}</td>
                <td>${data.duration}</td>
                <td>${data.campus}</td>
                <td> 
                        <a href="/partner/edit-courses/${data.id}">
                        <button class="btn btn-success btn-sm" >Edit</button>
                        </a>                    
                        <button class="btn btn-danger btn-sm" onclick="delete_courses(${data.id})" >Delete</button>
                </td>
                </tr>`
            });
            }
            document.getElementById("courses_data").innerHTML = htmltabledata

        })
    }
    function delete_courses(id)
    {
        if (confirm("Are you sure you want to delete this item?")) 
        {
        // console.log("clicked yes");
        // console.log(id);
        fetch(`http://localhost:8000/api/delete-courses/${id}`, {
        method: "GET",
        headers: 
        {
            "Content-Type": "application/json",
        },
        })
        .then((response) => {
            if (response.ok) 
            {
                console.log("Item deleted successfully");
            } 
            else 
            {
                console.error("Failed to delete item");
            }
        })
        .catch((error) => 
        {
            console.error("Error:", error);
        }); 
        
        getallcourse()
        }
        else
        {
            console.log("clicked no");
        }
    } 
    getallcourse()
</script>

@endsection