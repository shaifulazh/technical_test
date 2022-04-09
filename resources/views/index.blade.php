@extends('main')
@section('content')
    <a type="button" href="/add" class="btn btn-primary">Add</a>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>StudentID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>IC</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->StudentID}}</td>
                <td>{{$student->Name}}</td>
                <td>{{$student->Gender}}</td>
                <td>{{$student->IC}}</td>
                <td>
                <a type="button" href="/edit/{{$student->id}}" class="btn btn-primary">Edit</a>
                <a type="button" href="/delete/{{$student->id}}" class="btn btn-primary">Delete</a>
                <a type="button" href="/result/{{$student->id}}" class="btn btn-primary">Result</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@stop