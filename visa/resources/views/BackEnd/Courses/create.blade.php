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
            <form action="" method="post">
                @csrf
                
            </form>
    </div>
</div>
@endsection