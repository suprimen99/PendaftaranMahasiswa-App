@extends('layouts.mainAuth')

@section('title', 'Login')

@section('content')

    <div class="main d-flex justify-content-center align-items-center ">
        <div class="login-box">
            <form action="" method="post">
                @csrf
                <div>
                    <h1>Login</h1>
                    @if (Session('status'))
                    <div class="alert alert-danger">
                        {{Session('message')}}
                    </div>
                     @endif
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="Password" class="form-control" name="password" id="password">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
