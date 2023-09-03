@extends('layouts.backend.app')



@section('content')


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
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
        </table>
    </div>
</div>

@endsection