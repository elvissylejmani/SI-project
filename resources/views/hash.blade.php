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

    @isset($Bcrypt)
    <div class="col-6 mx-auto">
        <div class="form-group">
            <h1>Data Hashed with Bcrypt</h1>
       <p>{{$Bcrypt}}</p>
        </div>
        </div>
    @endisset
    @isset($Argon2)
    <div class="col-6 mx-auto">
        <div class="form-group">
            <h1>Data Hashed with Argon2</h1>
       <p>{{$Argon2}}</p>
        </div>
        </div>
    @endisset

@endsection
