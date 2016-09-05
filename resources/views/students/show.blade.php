@extends('layouts.app')

@section('title', '')

@section('content')

    <h1>
        @if($student->img_src == NULL)
            <img src="/images/{{$student->gender}}_icon.jpg" alt="" width="60px">
        @else
            <img src="{{$student->img_src}}" alt="" width="60px">
        @endif
            {{ $student->name }}
        <hr></h1>
    <div class="col-md-6">
        <ul>
            <li><b>Course:</b> {{ $student->course->name }}</li>
            <li><b>Level:</b> {{ $student->level->name }}</li>
        </ul>
    </div>
@stop