@extends('layouts.master')
@section('title')
    Add Page
@stop
@section('body')
    @if(Auth::check())
    @if(Session::get('saved'))
        <h2>ADDED !!</h2>
        @endif
<h2 class="text-center">ADD Form</h2>
    {!! Form::open() !!}
    Name: {!!Form::text('name','',['class'=>'form-control'])!!}<br/>
Email:{!!Form::text('email','',['class'=>'form-control'])!!}<br/>
{!!Form::submit('ADD Data',['class'=>'btn btn-primary form-control'])!!}
    {!!Form::close()!!}<br/><br/>

@foreach($v as $d)
    <ul>
        <li>{{$d->email}}------{{$d->name}}</li>
    </ul>
    @endforeach
@else
    <h2>Not Logged In!</h2>
    @endif
@stop