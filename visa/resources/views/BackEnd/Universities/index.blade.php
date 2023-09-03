@extends('layouts.backend.app')



@section('content')


@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="card">
    <div class="card-header">
        <h3>
            All University
              <a href="{{url('/partner/add-universities')}}" class="btn btn-primary float-end">Add University </a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>University Name</th>
                    <th>Institute Type</th>
                    <th>Ranking</th>
                    <th>Fees</th>
                    <th>IELTS</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody id="university_data">
              
            </tbody>

        </table>
    </div>
</div>

<script>
  function getallProductsData(){
        fetch("http://localhost:8000/api/all-universities").then((res)=>res.json()).then((response)=>{
            // console.log("data",response);
            if(response.length == 0)
            {
                htmltabledata = `
                    <tr>
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
                <td>${data.institution_type}</td>
                <td>${data.ranking}</td>
                <td>${data.fees}</td>
                <td>${data.ielts}</td>
                <td> 
                        <a href="/partner/edit-universities/${data.id}">
                        <button class="btn btn-success btn-sm" >Edit</button>
                        </a>                    
                        <button class="btn btn-danger btn-sm" onclick="delete_university(${data.id})" >Delete</button>
                </td>
                </tr>`
            });
            }
          
            document.getElementById("university_data").innerHTML = htmltabledata
        })
    }


    function delete_university(id)
    {
        if (confirm("Are you sure you want to delete this item?")) 
        {
        // console.log("clicked yes");
        // console.log(id);
        fetch(`http://localhost:8000/api/delete-universities/${id}`, {
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
        
        getallProductsData()
        }
        else
        {
            console.log("clicked no");
        }
    } 
    getallProductsData()
   
</script>


@endsection