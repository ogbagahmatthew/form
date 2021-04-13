
@extends('layouts.app') 
@section('title', 'Available users | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available users</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            firstname
                                        </th>
                                        <th>
                                            lastname
                                        </th>
                                        
                                        <th>
                                            Email
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($users) > 0)
                                        @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{$user->id}}
                                            </td>
                                            <td>
                                                {{$user->firstname}} 
                                            </td>
                                            <td>
                                                {{$user->laststname}} 
                                            </td>
                                            <td>
                                                {{$user->email}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/users')}}/{{$user->id}}" class="btn btn-warning">VIEW userss</a>
                                                <!-- {{-- <a href="{{url('/users')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}} -->
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No users found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
