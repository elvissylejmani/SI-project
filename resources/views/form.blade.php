@extends('layouts.app')
@section('content')
    



<div class="container">
<form action="/form" method="POST">
    @csrf
    <div class="col-6 mx-auto">
    <div class="form-group">
      <label for="exampleInputEmail1">Full Name</label>
      <input type="text" name="Fullname" class="form-control
       {{$errors->has('Fullname') ? 'border border-danger' : ''}}"
       id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Age</label>
      <input type="text" name="Age" class="form-control
       {{$errors->has('Fullname') ? 'border border-danger' : ''}}"
       id="exampleInputPassword1" placeholder="Age">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


@if ($errors->any())

@foreach ($errors->all() as $error)
    
<div class="alert alert-danger mt-4" role="alert">
    {{$error}}
  </div>
@endforeach
@endif

@endsection

