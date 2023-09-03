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
                    <th>Institute Type</th>
                    <th>Ranking</th>
                    <th>Fees</th>
                    <th>IELTS</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody id="courses_data">
              
            </tbody>

        </table>
    </div>
</div>

@endsection