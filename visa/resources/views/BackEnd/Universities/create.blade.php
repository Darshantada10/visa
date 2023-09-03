@extends('layouts.backend.app')



@section('content')


<div class="card">
    <div class="card-header">
        <h3>
            Add University
              <a href="{{url('/partner/all-universities')}}" class="btn btn-primary float-end">Back </a>
        </h3>
    </div>
    <div class="card-body">
        
        <form action="{{url('/partner/add-universities')}}" method="post" id="university_form"  
        onsubmit="event.preventDefault(); saveuniversitydata()">
            @csrf

            <div class="mb-3">
                <label for="university_name">University Name</label>
                <input type="text" name="university_name" class="form-control" required >
                @error('university_name')
                <small class="text-danger">{{$message}}</small>
                @enderror   
            </div>

            <div class="mb-3">
                <label for="institution_type">Institution Type</label>
                <input type="text" name="institution_type" class="form-control" required >
            </div>

            <div class="mb-3">
                <label for="campus">Campus</label>
                <input type="text" name="campus" class="form-control" required >
            </div>
           
            <div class="mb-3">
                <label for="moi">MOI Accepted?</label>
                <input type="text" name="moi" class="form-control" required >
            </div>
           
            <div class="mb-3">
                <label for="last_percentage">Required Percentage (%) in Last Education</label>
                <input type="text" name="last_percentage" class="form-control" required >
            </div>
            
            <div class="mb-3">
                <label for="fees">Fees P.A. (GBP)</label>
                <input type="text" name="fees" class="form-control" required >
            </div>
            
            <div class="mb-3">
                <label for="ielts">IELTS Requirement</label>
                <input type="text" name="ielts" class="form-control" required >
            </div>
            
            <div class="mb-3">
                <label for="deadline">Deadline</label>
                <input type="text" name="deadline" class="form-control" required >
            </div>
           
            <div class="mb-3">
                <label for="admission_document">Admission Document's</label>
                <input type="text" name="admission_document" class="form-control" required >
            </div>
           
            <div class="mb-3">
                <label for="accreditation">Accreditation</label>
                <input type="text" name="accreditation" class="form-control" required >
            </div>
           
            <div class="mb-3">
                <label for="ranking">Ranking</label>
                <input type="text" name="ranking" class="form-control" required >
            </div>

            <button class="btn btn-success btn-lg">Save</button>
        </form>

    </div>
</div>

<script>

    function saveuniversitydata(pid) 
    {
    // console.log("called university form");
    var university_data = {};
    $.each($('#university_form').serializeArray(), function() 
    {
        university_data[this.name] = this.value;
    });
    // console.log("university_data", university_data);

    fetch("http://localhost:8000/api/add-universities", 
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
    // .catch((error) => {
    //     console.error("Error:", error);
    // });
}

</script>

@endsection