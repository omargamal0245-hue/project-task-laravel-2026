@extends('layouts.app')

@section('content')
<h3>Edit Student</h3>

<form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone', $student->phone) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Course</label>
        <select name="course_id" class="form-select">
            @foreach ($courses as $course)
                <option value="{{ $course->id }}"
                    {{ old('course_id', $student->course_id) == $course->id ? 'selected' : '' }}>
                    {{ $course->title }}
                </option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-success">Update</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection