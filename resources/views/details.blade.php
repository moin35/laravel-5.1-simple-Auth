@extends('layouts/master')
@section('title')
Details of {{$d->name}}
@stop
@section('body')
<div class="container"><div class="row"><div class="col-md-12">
            <h2 class="text-center">Details Page</h2>
            <br/><br/><br/>
            <h1 class="text-center">{{$d->id}}</h1>
            <h1 class="text-center">{{$d->name}}</h1>
            <h1 class="text-center">{{$d->email}}</h1>
        </div></div></div>
@stop