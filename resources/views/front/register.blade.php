@extends('front.layout.master')
@section('title') Register @endsection

@section('content')

    <div class="container">
        <div class="row" style="padding-top: 20%;padding-left: 30%;">
            <div class="col-lg-8">
                <h1 style="color:white;">Register</h1>
                <hr>
                {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\Front\LoginController@registerIn']) !!}
                @csrf
                {!! Form::hidden('role_id',2) !!}
                <div class="form-group">
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>' Name','style'=>'border-radius:25px;height:50px;','autocomplete'=>'off'])}}
                    @error('name') <div class="alert alert-info" style="border-radius:25px;color:red;">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    {{Form::text('lastName','',['class'=>'form-control','placeholder'=>' Last Name','style'=>'border-radius:25px;height:50px;','autocomplete'=>'off'])}}
                    @error('lastName') <div class="alert alert-info" style="border-radius:25px;color:red;">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    {{Form::text('email','',['class'=>'form-control','placeholder'=>' Email address','style'=>'border-radius:25px;height:50px;','autocomplete'=>'off'])}}
                    @error('email') <div class="alert alert-info" style="border-radius:25px;color:red;">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    {{Form::password('password',['class'=>'form-control border-input','autocomplete'=>'off','placeholder'=>'password','style'=>'border-radius:25px;height:50px;'])}}
                    @error('password') <div class="alert alert-info" style="border-radius:25px;color:red;">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    {{Form::password('password_confirmation',['class'=>'form-control border-input','autocomplete'=>'off','placeholder'=>'password','style'=>'border-radius:25px;height:50px;'])  }}
                    @error('password_confirmation') <div class="alert alert-info" style="border-radius:25px;color:red;">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    {{Form::submit('Submit',['class'=>'btn btn-primary form-control','style'=>'border-radius:25px;height:50px;'])}}

                </div>
                {!! Form::close() !!}

            </div>
        </div>



@endsection
