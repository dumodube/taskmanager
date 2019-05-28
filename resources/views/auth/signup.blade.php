@extends('layouts.auth')
    @section('content')
    
        <div class="signup">
            <form action="{{route('auth.signup')}}" method="post" role='form' class="signup-form form">
                @csrf
                <div class="img-logo">
                    <a href="/"><img alt="Task Manager" src="{{asset('img/Task.png')}}"  ></a>
                </div>
                        <div class="form-group {{$errors->has('name') ? ' has-error' : ''}}">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{Request::old('name') ?: ''}}">
                            @if($errors->has('name'))
                                <span class="lead text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div> 

                        <div class="form-group {{$errors->has('email') ? ' has-error' : ''}}">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{Request::old('email') ?: ''}}">
                            @if($errors->has('email'))
                                <span class="lead text-danger">{{$errors->first('email')}}</span>
                            @endif
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
                            Sign Up
                        </button>
                        <p>Already have an account <a href="{{route('auth.signin')}}">Login</a></p>
                        
        
            </form>
        </div>
    @endsection()