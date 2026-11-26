@extends('layouts.app')

@section('content')
<h3 class="mb-4">Dashboard</h3>

<div class="row">
    <div class="col-md-6">
        <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Courses</h5>
                <p class="display-4">{{ $coursesCount }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Students</h5>
                <p class="display-4">{{ $studentsCount }}</p>
            </div>
        </div>
    </div>
</div>
@endsection