@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @guest
                           <p style="color: red"> Kjo e dhënë nuk mund të shihet nga vizitorët e pa log-our </p>
                        @endguest

                        @auth
                       <p style="color: aqua"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat n
                        on proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
