@extends('layouts/master')
@section('title')
    Update Record of {{$r->name}}
@stop
@section('body')
    <div class="container"><div class="row"><div class="col-md-12">
                <h2 class="text-center">Update Records for {{$r->email}}</h2>
                <br/>
                @if(Session::get('u'))
                    <h2 class="text-center">Record Successfully updated!</h2>
                @endif
                <br/>
                {!!Form::open()!!}
                Name:{!!Form::text('name',$r->name,['class'=>'form-control'])!!}
                <br/>
                Email:{!!Form::text('email',$r->email,['class'=>'form-control'])!!}
                <br/>
                {!!Form::submit('Update',['class'=>'form-control'])!!}
                {!!Form::close()!!}
            </div></div></div>
@stop