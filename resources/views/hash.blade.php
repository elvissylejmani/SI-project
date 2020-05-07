@extends('layouts.app')
@section('content')
    
<form action="/hash" method="POST">
    @csrf
    <div class="col-6 mx-auto">
    <div class="form-group">
      <label for="exampleInputEmail1">hash data with bcrypt && Agon2</label>
      <input type="text" name="hash" class="form-control"
       id="exampleInputEmail1"  placeholder="Data to be hashed">

       <button type="submit" class="btn btn-primary mt-4">hash</button>
    </div>
    </div>
    </form>

@endsection
