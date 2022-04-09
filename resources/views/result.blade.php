@extends('main')
@section('content')
<div class="card-body">
        <h1>Student Result</h1>
        <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-5">
              <input type="text" id="StudentID" name="StudentID" class="form-control" disabled required="" value="{{$student->Name}}">
          </div>
        </div>
        <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Average Result</label>
          <div class="col-sm-5">
              <input type="text" name="Name" class="form-control" required=""  disabled value="{{$average}}">
            </div>
        </div>
        <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-5">
          <a type="button" href="/" class="btn btn-primary">Back To Student Page</a>
            </div>
        </div>
</div>

<a type="button" href="/result_add/{{$student->id}}" class="btn btn-primary">Add</a>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Course</th>
                <th>Mark</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach ($results as $result)
            <tr>
                <td>{{$result->Course}}</td>
                <td>{{$result->Mark}}</td>
                <td>
                <a type="button" href="/result_edit/{{$result->id}}" class="btn btn-primary">Edit</a>
                <a type="button" href="/result_delete/{{$result->id}}" class="btn btn-primary">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop