@extends('layouts.base')
@section('title', ' | SignUp ')
@section('content')

    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="{{ url('/') }}">Admin Signup</a>
            <section class="m-b-lg">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                        {{ Session::get('success') }}
                    </div>
                @endif
                <header class="wrapper text-center"> <strong>Sign up</strong> </header>
                <form action="{{ route('auth.a_register') }}" method="post" >
                    {{ csrf_field() }}
                    @include('errors.501')
                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="req"></span>
                            <input type="text" placeholder="Full Name" class="form-control no-border" name="full_name" value="{{ old('full_name') }}" >
                            <span class="help-block">
                             <strong class="bg-white">{{ $errors->first('full_name') }}</strong>
                            </span>
                        </div>
                        <div class="list-group-item">
                            <span class="req"></span>
                            <input type="email" placeholder="email" class="form-control no-border" name="email" value="{{ old('email') }}">
                            <span class="help-block">
                             <strong class="bg-white">{{ $errors->first('email') }}</strong>
                            </span>
                        </div>
                        <div class="list-group-item">
                            <span class="req"></span>
                            <input type="text" placeholder="Phone Number" class="form-control no-border" name="phonenum" value="{{ old('phonenum') }}">
                            <span class="help-block">
                             <strong class="bg-white">{{ $errors->first('phonenum') }}</strong>
                            </span>
                        </div>
                        <div class="list-group-item">
                            <span class="req"></span>
                            <input type="password" placeholder="Password" class="form-control no-border" name="password">
                            <span class="help-block">
                             <strong class="bg-white">{{ $errors->first('password') }}</strong>
                            </span>
                        </div>

                        <div class="list-group-item">
                            <span class="req"></span>
                            <input type="password" placeholder="Password Confirmation"  class="form-control no-border" name="password_confirmation"  autocomplete="off" >
                            <span class="help-block">
                             <strong class="bg-white">{{ $errors->first('password-confirm') }}</strong>
                            </span>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-lg btn-primary btn-block">
                    <div class="text-center m-t m-b"><a href=""><small>Forgot password?</small></a></div>
                    <div class="line line-dashed"></div>

                </form>
            </section>
        </div>
    </section>



@endsection