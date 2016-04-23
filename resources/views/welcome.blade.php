@extends('layouts.master')
@section('title')
    Home
@stop
@section('body')
<h2>Hello {{Auth::user()->email}}!,&nbsp;&nbsp;&nbsp;<a href="{{URL::to('logout')}}">Logout</a></h2>
<a href="{{URL::to('add')}}">Create Record Page</a><br/>
<a href="{{URL::to('rud')}}">Read, Update and Delete Record Page</a>
@stop