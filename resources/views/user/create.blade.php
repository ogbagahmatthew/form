@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'UserController@store', 'method' => 'POST']) !!}
<div class="form-group">

<div class="form-group">
    {{Form::label('firstname',  'firstname')}}
    {{Form::text('firstname','', ['class' =>'form-control', 'placeholder' => "firstname"])}}
</div>

<div class="form-group">
    {{Form::label('lastname',  'lastname')}}
    {{Form::text('lastname','', ['class' =>'form-control', 'placeholder' => "lastname"])}}
</div>


<div class="form-group">
    {{Form::label('email',  ' email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => " email"])}}
</div>

<div class="form-group">
    {{Form::label('password',  ' password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => " password"])}}
</div>
<!-- 
<div class="form-group">
    {{Form::label('total',  ' total')}}
    {{Form::text('total','', ['class' =>'form-control', 'placeholder' => " total"])}}
</div> -->


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection






