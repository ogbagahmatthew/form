@extends('layouts.app')
@section('title', 'contacts | Form')
@section('content')
<div class="container">
    <h1>contacts name:{{$contacts->name}}</h1>
    <p><b>contact phone_no</b>:{{$contacts->phone_no}}</p>
    <p><b>contact id</b>:{{$contacts->id}}</p>
    <p><b>contact email</b>:{{$contacts->email}}</p>
    <p><b>contact company</b>:{{$contacts->company}}</p>
    <a class="btn btn-primary mb-3" href="{{url('/contact')}}/{{$contacts->id}}/edit" class="btn btn-default">Edit contacts</a>
{!!Form::open(['action'=> ['ContactController@destroy', $contacts->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection