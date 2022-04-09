@extends('main')
@section('content')
<div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store')}}">
       @csrf
       <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Student ID</label>
          <div class="col-sm-5">
              <input type="text" id="StudentID" name="StudentID" class="form-control" required="">
          </div>
        </div>
        <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-5">
              <input type="text" name="Name" class="form-control" required="">
            </div>
        </div>
        <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Gender</label>
          <div class="col-sm-2">
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="Gender" class="custom-control-input" checked value="Male" >
            <label class="custom-control-label" for="customRadio1">Male</label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="Gender" class="custom-control-input" value="Female">
            <label class="custom-control-label" for="customRadio2">Female</label>
            </div>
        </div>
        </div>
        <div class="form-group row m-2">
          <label for="exampleInputEmail1" class="col-sm-2 col-form-label">IC</label>
          <div class="col-sm-5">
              <input type="text" name="IC" class="form-control" required="">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
@stop