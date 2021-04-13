@extends('layouts.app')
@section('title', 'admins | Findworka')
@section('content')
<div class="container">
    <h1>admins firstName:{{$admins->firstname}}</h1>
    <p><b>admin lastname</b>:{{$admins->lastname}}</p>
    <p><b>admin id</b>:{{$admins->id}}</p>
    <p><b>admin email</b>:{{$admins->email}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/admin')}}/{{$admins->id}}/edit" class="btn btn-default">Edit admins</a>
{!!Form::open(['action'=> ['AdminController@destroy', $admins->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection