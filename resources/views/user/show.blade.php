@extends('layouts.app')
@section('title', 'users | Findworka')
@section('content')
<div class="container">
    <h1>users   firstname:{{$users->firstname}}</h1>
    <p><b>user lastname</b>:{{$users->lastname}}</p>
    <p><b>user id</b>:{{$users->id}}</p>
    <p><b>user email</b>:{{$users->email}}</p>
    <p><b>user password</b>:{{$users->password}}</p>
    <!-- <p><b>user total</b>:{{$users->total}}</p> -->
    <a class="btn btn-primary mb-3" href="{{url('/users')}}/{{$users->id}}/edit" class="btn btn-default">Edit users</a>
{!!Form::open(['action'=> ['UserController@destroy', $users->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection