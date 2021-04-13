
@extends('layouts.app') 
@section('title', 'Available Admins | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available Admins</h5>
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
                                        @if(count($admins) > 0)
                                        @foreach($admins as $admin)
                                        <tr>
                                            <td>
                                                {{$admin->id}}
                                            </td>
                                            <td>
                                                {{$admin->firstname}} 
                                            </td>
                                            <td>
                                                {{$admin->laststname}} 
                                            </td>
                                            <td>
                                                {{$admin->email}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/admin')}}/{{$admin->id}}" class="btn btn-warning">VIEW Admins</a>
                                                <!-- {{-- <a href="{{url('/admin')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}} -->
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No admin found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
