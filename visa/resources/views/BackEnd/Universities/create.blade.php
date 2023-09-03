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
        
        <form action="" method="post">
            @csrf

            <div class="mb-3">
                <label for="university_name">University Name</label>
                <input type="text" name="university_name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="institution_type">Institution Type</label>
                <input type="text" name="institution_type" class="form-control">
            </div>

            <div class="mb-3">
                <label for="campus">Campus</label>
                <input type="text" name="campus" class="form-control">
            </div>
           
            <div class="mb-3">
                <label for="moi">moi</label>
                <input type="text" name="moi" class="form-control">
            </div>
           
            <div class="mb-3">
                <label for="last_percentage"></label>
                <input type="text" name="last_percentage" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="fees"></label>
                <input type="text" name="fees" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="ielts"></label>
                <input type="text" name="ielts" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="fees"></label>
                <input type="text" name="fees" class="form-control">
            </div>

        </form>

    </div>
</div>

@endsection