@extends('layouts.app')

@section('content')
<h3>Edit Course</h3>

<form action="{{ route('courses.update', $course) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $course->title) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ old('description', $course->description) }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $course->price) }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Duration (hours)</label>
        <input type="number" name="duration" class="form-control" value="{{ old('duration', $course->duration) }}">
    </div>
    <button class="btn btn-success">Update</button>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection