@extends('layouts.app')

@section('title', '')

@section('content')

    <h1>STUDENTS</h1>


    <a href="/students/create" class="btn-success btn">Add New Student</a>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Year Level</th>
        </tr>
        @forelse( $students as $student )
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->course->name }}</td>
                <td>{{ $student->level->name }}</td>
                <td><a href="/students/{{$student->id}}" class="btn btn-sm btn-primary">view</a></td>
            </tr>
        @empty

        @endforelse
    </table>

    {{ $students->render() }}
@stop