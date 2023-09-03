@extends('layouts.backend.app')



@section('content')

<div class="card" id="edit_university_data">

</div>



<script>
      


        function get_university_data()
        {
            var id = {!! $id !!};
        // console.log(id);
            fetch("http://localhost:8000/api/edit-universities/"+id).then((res)=>res.json()).then((response)=>{
            // console.log("data",response);
            // if(response.length == 0)
            // {
            //     console.log(1);
            //     htmltabledata = `
            //         <tr>
            //         <th style="text-align: center;" colspan="7">No Data Found</th>
            //         </tr>`
            
            // }
            // else
            // {
                htmltabledata = ""
            response.forEach(data => {
                htmltabledata += ` <div class="card-header">
        <h3>
            Add University
              <a href="{{url('/partner/all-universities')}}" class="btn btn-primary float-end">Back </a>
        </h3>
    </div>
    <div class="card-body">
        
        <form action="{{url('/partner/add-universities')}}" method="post" id="update_university_form"  
        onsubmit="event.preventDefault(); update_university_data(${data.id})">
            @csrf

            <div class="mb-3">
                <label for="university_name">University Name</label>
                <input type="text" name="university_name" class="form-control" value="${data.university_name}" required >
                @error('university_name')
                <small class="text-danger">{{$message}}</small>
                @enderror   
            </div>

            <div class="mb-3">
                <label for="institution_type">Institution Type</label>
                <input type="text" name="institution_type" class="form-control" value="${data.institution_type}" required >
            </div>

            <div class="mb-3">
                <label for="campus">Campus</label>
                <input type="text" name="campus" class="form-control" value="${data.campus}" required >
            </div>
           
            <div class="mb-3">
                <label for="moi">MOI Accepted?</label>
                <input type="text" name="moi" class="form-control" value="${data.moi}" required >
            </div>
           
            <div class="mb-3">
                <label for="last_percentage">Required Percentage (%) in Last Education</label>
                <input type="text" name="last_percentage" class="form-control" value="${data.last_percentage}" required >
            </div>
            
            <div class="mb-3">
                <label for="fees">Fees P.A. (GBP)</label>
                <input type="text" name="fees" class="form-control" value="${data.fees}" required >
            </div>
            
            <div class="mb-3">
                <label for="ielts">IELTS Requirement</label>
                <input type="text" name="ielts" class="form-control" value="${data.ielts}" required >
            </div>
            
            <div class="mb-3">
                <label for="deadline">Deadline</label>
                <input type="text" name="deadline" class="form-control" value="${data.deadline}" required >
            </div>
           
            <div class="mb-3">
                <label for="admission_document">Admission Document's</label>
                <input type="text" name="admission_document" class="form-control" value="${data.admission_document}" required >
            </div>
           
            <div class="mb-3">
                <label for="accreditation">Accreditation</label>
                <input type="text" name="accreditation" class="form-control" value="${data.accreditation}" required >
            </div>
           
            <div class="mb-3">
                <label for="ranking">Ranking</label>
                <input type="text" name="ranking" class="form-control" value="${data.ranking}" required >
            </div>

            <button class="btn btn-success btn-lg">Save</button>
        </form>

    </div>`
            });
            // }
          
            document.getElementById("edit_university_data").innerHTML = htmltabledata
        })
    }
    function update_university_data(id)
    {
        var university_data = {};
    $.each($('#update_university_form').serializeArray(), function() 
    {
        university_data[this.name] = this.value;
    });


        console.log(id);
        console.log(university_data);
        fetch("http://localhost:8000/api/edit-universities/"+id, 
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
    get_university_data()
</script>
@endsection