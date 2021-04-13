
@extends('layouts.app') 
@section('title', 'Available contacts | Mima Water') 
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available contacts</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            name
                                        </th>
                                        <th>
                                            phone_no
                                        </th>
                                        
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Company
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($contacts) > 0)
                                        @foreach($contacts as $contact)
                                        <tr>
                                            <td>
                                                {{$contact->id}}
                                            </td>
                                            <td>
                                                {{$contact->name}} 
                                            </td>
                                            <td>
                                                {{$contact->phone_no}} 
                                            </td>
                                            <td>
                                                {{$contact->email}} 
                                            </td>
                                            <td>
                                                {{$contact->company}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/contact')}}/{{$contact->id}}" class="btn btn-warning">VIEW contacts</a>
                                                <!-- {{-- <a href="{{url('/contact')}}/{{$courses->id}}/edit" class="btn btn-warning">EDIT program</a> --}} -->
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No contact found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
