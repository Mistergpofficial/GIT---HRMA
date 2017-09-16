@extends('layouts.base')
@section('content')

    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="{{ url('/') }}">GIT-HRMA</a>
            <section class="m-b-lg">

                @if(Session::has('danger'))
                    <div class="alert alert-success">
                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                        {{ Session::get('danger') }}
                    </div>
                @endif
       
                <header class="wrapper text-center"> <strong>Sign in to view details</strong> </header>
                <form action="{{ url('signin') }}" method="post" >
                    {{ csrf_field() }}
                    <div class="list-group">
                        <div class="list-group-item">
                            <input type="email" placeholder="Email" class="form-control no-border" name="email" value="" required>
                            <span class="help-block">
                             <strong class="bg-white">{{ $errors->first('email') }}</strong>
                            </span>
                        </div>
                        <div class="list-group-item">
                            <input type="password" placeholder="Password" class="form-control no-border" name="password" value="" required>
                            <span class="help-block">
                             <strong class="bg-white">{{ $errors->first('password') }}</strong>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                    <div class="text-center m-t m-b"><a href="{{ route('password.request') }}"><small>Forgot password?</small></a></div>
                    <div class="line line-dashed"></div>

                </form>
            </section>
        </div>
    </section>


@endsection