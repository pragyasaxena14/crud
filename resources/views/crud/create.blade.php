<!-- create.blade.php -->
@extends('master')
@section('content')
<div class="container">
<form method="post" action="{{url('crud')}}">
<div class="form-group-row">
   {{csrf_field()}}
<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Enter Your Name" name="title">
      </div></br>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Articulate yourself</label>
      <div class="col-sm-10"></br>
        <textarea name="post" rows="8" cols="100"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection