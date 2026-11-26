@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Students</h3>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
</div>

<form method="GET" action="{{ route('students.index') }}" class="row g-2 mb-3">
    <div class="col-md-5">
        <input type="text" name="search" class="form-control" placeholder="Search by name"
               value="{{ request('search') }}">
    </div>
    <div class="col-md-4">
        <select name="course_id" class="form-select">
            <option value="">All Courses</option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}" {{ request('course_id') == $course->id ? 'selected' : '' }}>
                    {{ $course->title }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-3">
        <button class="btn btn-dark">Filter</button>
        <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Reset</a>
    </div>
</form>

<table class="table table-bordered bg-white">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->course->title }}</td>
                <td class="d-flex gap-1">
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST"
                          onsubmit="return confirm('Delete this student?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center">No students found.</td></tr>
        @endforelse
    </tbody>
</table>

{{ $students->links('pagination::bootstrap-5') }}
@endsection