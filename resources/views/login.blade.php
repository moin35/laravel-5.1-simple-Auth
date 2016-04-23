@extends('layouts/master')
@section('title')
    Login
@stop
@section('body')
    <div class="container"><div class="row"><div class="col-md-12">
                <h2 class="text-center">Login!</h2>
                <br/><br/>
                {!!Form::open()!!}
                Email: {!!Form::text('email','',['class'=>'form-control','placeholder'=>'Email Address'])!!}
                <br/>
                Password: {!!Form::password('pass',['class'=>'form-control','placeholder'=>'Email Address'])!!}
                <br/>
                {!!Form::submit('Login',['class'=>'form-control btn btn-primary'])!!}
                {!!Form::close()!!}

            </div></div></div>
@stop