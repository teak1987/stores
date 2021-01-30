@extends('front.layout.master')
@section('title') Login @endsection

@section('content')

    <div class="container">
        <div class="row" style="padding-top: 20%;padding-left: 30%;">
            <div class="col-lg-8">
                <h1 style="color:white;">Sign up</h1>
                <hr>
                {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\Front\LoginController@loginIn']) !!}
                @csrf

                <div class="form-group">
                    {{Form::text('email','',['class'=>'form-control','placeholder'=>' Email address','style'=>'border-radius:25px;height:50px;','autocomplete'=>'off'])}}
                    @error('email') <div class="alert alert-info" style="border-radius:25px;color:red;">{{$message}}</div> @enderror
                </div>
                <div class="form-group">

                    {{Form::password('password',['class'=>'form-control border-input','autocomplete'=>'off','placeholder'=>'password','style'=>'border-radius:25px;height:50px;'])}}
                    @error('password') <div class="alert alert-info" style="border-radius:25px;color:red;">{{$message}}</div> @enderror
                    @if(session()->has('message'))
                        <strong style="color:red;margin-left: 15px;">{{session()->get('message')}}</strong>
                    @endif
                </div>
                <div class="form-group">
                    {{Form::submit('Submit',['class'=>'btn btn-primary form-control','style'=>'border-radius:25px;height:50px;'])}}

                </div>
                {!! Form::close() !!}

            </div>
        </div>



    </div>


@endsection

