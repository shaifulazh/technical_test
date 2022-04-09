@extends('main')
@section('content')
<div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('result_update')}}">
       @csrf
       <input hidden name="student_id" value="{{$student->id}}" />
       <input hidden name="result_id" value="{{$result->id}}" />
       <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Student ID</label>
          <div class="col-sm-5">
              <input type="text" id="StudentID" name="StudentID" class="form-control" required="" value="{{$student->StudentID}}">
          </div>
        </div>
        <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Course</label>
          <div class="col-sm-5">
              <input type="text" name="Course" class="form-control" required="" value = "{{$result->Course}}">
            </div>
        </div>
        <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Mark</label>
          <div class="col-sm-5">
              <input type="number" name="Mark" class="form-control" required="" value = "{{$result->Mark}}">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
@stop