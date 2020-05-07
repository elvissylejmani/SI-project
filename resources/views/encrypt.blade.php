@extends('layouts.app')
@section('content')
    
<form action="/encrypt" method="POST">
    @csrf
    <div class="col-6 mx-auto">
    <div class="form-group">
      <label for="exampleInputEmail1">Encrypt data</label>
      <input type="text" name="encrypt" class="form-control"
       id="exampleInputEmail1"  placeholder="Data to be encrypted">

       <button type="submit" class="btn btn-primary mt-4">Encrypt</button>
    </div>
    </div>
    </form>

    @isset($data)
        
    <form action="/encrypt" method="POST">
        @csrf
        <div class="col-6 mx-auto">
        <div class="form-group">
          <label for="exampleInputEmail1">Decrypt data</label>
        <input type="text" value="{{ $data ?? ''}}" name="decrypt" class="form-control"
           id="exampleInputEmail1"  placeholder="Data to be encrypted">
    
           <button type="submit" class="btn btn-primary mt-4">Decrypt</button>
        </div>
        </div>
        </form>
        @endisset

    </div>
@endsection




