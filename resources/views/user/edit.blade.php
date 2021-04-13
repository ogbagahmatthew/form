@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['UserController@update', $users->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstname',  'firstname')}}
            {{Form::text('firstname', $users->firstname, ['class' =>'form-control', 'placeholder' => " firstname"])}}
        </div>

        <div class="form-group">
            {{Form::label('lastname',  'lastname')}}
            {{Form::text('lastname', $users->lastname, ['class' =>'form-control', 'placeholder' => " lastname"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $users->email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>

        <div class="form-group">
            {{Form::label('password',  'password')}}
            {{Form::text('password', $users->password, ['class' =>'form-control', 'placeholder' => " password"])}}
        </div>


<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection