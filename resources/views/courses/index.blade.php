@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Courses</h3>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
</div>

<table class="table table-bordered bg-white">
    <thead>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Duration (hours)</th>
            <th>Students</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($courses as $course)
            <tr>
                <td>{{ $course->title }}</td>
                <td>{{ $course->price }}</td>
                <td>{{ $course->duration }}</td>
                <td>{{ $course->students_count }}</td>
                <td class="d-flex gap-1">
                    <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST"
                          onsubmit="return confirm('Delete this course?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center">No courses yet.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection