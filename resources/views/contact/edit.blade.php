@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['ContactController@update', $contacts->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'name')}}
            {{Form::text('name', $contacts->name, ['class' =>'form-control', 'placeholder' => "name"])}}
        </div>

        <div class="form-group">
            {{Form::label('phone_no',  'phone_no')}}
            {{Form::text('phone_no', $contacts->phone_no, ['class' =>'form-control', 'placeholder' => " phone_no"])}}
        </div>

        <div class="form-group">
            {{Form::label('email',  'Email')}}
            {{Form::text('email', $contacts->email, ['class' =>'form-control', 'placeholder' => " Email"])}}
        </div>
        <div class="form-group">
            {{Form::label('company',  'company')}}
            {{Form::text('company', $contacts->company, ['class' =>'form-control', 'placeholder' => " company"])}}
        </div>


<div style="padding-top:15px;">      
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}     
{{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
</div>
@endsection