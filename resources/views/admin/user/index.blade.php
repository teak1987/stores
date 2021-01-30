@extends('admin.layout.master')
@section('title') Users @endsection
@section('content')
    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>All Users</h1>

            <hr style="border:3px dashed lightslategrey">

            <div class="content table-responsive table-full-width">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="font-weight: bolder;">Id</th>
                        <th style="font-weight: bolder;">Name</th>
                        <th style="font-weight: bolder;">Last Name</th>
                        <th style="font-weight: bolder;">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastName}}</td>
                            <td>{{$user->email}}</td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>




@endsection


