@extends('layouts/master')
@section('title')
    Read, Update and Delete
@stop
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Read, Update and Delete Page</h2>
                @if(Session::get('ds'))
                <h2 class="text-center">Deleted Successfully</h2>
                @endif
                <table class="table table-bordered table-hover table-responsive">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>View More</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($v as $r)
                <tr>
                    <td>{{$r->email}}</td>
                    <td><a href="{{URL::to('/')}}/details/{{$r->id}}" class="btn btn-primary">View More</a></td>
                    <td><a href="{{URL::to('/')}}/update/{{$r->id}}" class="btn btn-primary">Update</a></td>
                    <td><a href="{{URL::to('/')}}/delete/{{$r->id}}" class="btn btn-primary">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@stop