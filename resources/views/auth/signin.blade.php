@extends('layouts.auth')
    @section('content')
    
        <div class="card">
            <form action="{{route('auth.signin')}}" method="post" role='form' class="side form">
                @csrf

                        <div class="img-logo">
                            <a href="/"><img alt="Task Manager" src="{{asset('img/Task.png')}}"  ></a>
                        </div>
                        <div class="form-group {{$errors->has('username') ? ' has-error' : ''}}">
                            <label>Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="{{Request::old('username') ?: ''}}">
                            @if($errors->has('username'))
                                <span class="lead text-danger">{{$errors->first('username')}}</span>
                            @endif
                        </div> 

                        <div class="form-group {{$errors->has('password') ? ' has-error' : ''}}">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @if($errors->has('password'))
                                <span class="lead text-danger">{{$errors->first('password')}}</span>
                            @endif
                        </div>

                        <button class="btn-submit" type='submit'>
                            Login
                        </button>
                        <p>Don't have an account <a href="{{route('auth.signup')}}">Sign Up</a></p>
                        
        
            </form>
        </div>
    @endsection()