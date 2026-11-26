@extends('layouts.app')

@section('content')
<h3>{{ $course->title }}</h3>
<p>{{ $course->description }}</p>
<p><strong>Price:</strong> {{ $course->price }} | <strong>Duration:</strong> {{ $course->duration }} hours</p>

<h5>Registered Students</h5>
<ul class="list-group mb-3">
    @forelse ($course->students as $student)
        <li class="list-group-item">{{ $student->name }} - {{ $student->email }}</li>
    @empty
        <li class="list-group-item">No students registered.</li>
    @endforelse
</ul>

<a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
@endsection