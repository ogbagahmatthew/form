@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'ContactController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "name"])}}
</div>

<div class="form-group">
    {{Form::label('phone_no',  'phone_no')}}
    {{Form::text('phone_no','', ['class' =>'form-control', 'placeholder' => "phone_no"])}}
</div>


<div class="form-group">
    {{Form::label('email',  ' Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => " Email"])}}
</div>

<div class="form-group">
    {{Form::label('company',  ' company')}}
    {{Form::text('company','', ['class' =>'form-control', 'placeholder' => " Company"])}}
</div>


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection
