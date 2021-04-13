@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'AdminController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('firstname',  'firstname')}}
    {{Form::text('firstname','', ['class' =>'form-control', 'placeholder' => "Firstname"])}}
</div>

<div class="form-group">
    {{Form::label('lastname',  'lastname')}}
    {{Form::text('lastname','', ['class' =>'form-control', 'placeholder' => "Lastname"])}}
</div>


<div class="form-group">
    {{Form::label('email',  ' Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => " Email"])}}
</div>
<div class="form-group row">
    <label for="password" class="col-md-7 col-form-label text-md-left">{{ __('Password') }}</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    </div>
</div>
{{-- <div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div>  --}}


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection
