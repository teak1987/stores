@extends('admin.layout.master')
@section('title') Create Store @endsection
@section('content')

    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>Create Store</h1>

            <div class="row">
                <div class="col-md-12">
                    {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\Admin\StoreController@store']) !!}
                    <div class="form-group">
                        {{Form::label('name','Store Name:')}}
                        {{Form::text('name','',['class'=>'form-control border-input','placeholder'=>'Lidl '])}}
                        @error('name')<p style="color:red;">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                        {{Form::label('code','Code:')}}
                        {{Form::text('code','',['class'=>'form-control border-input','placeholder'=>'Code-1234'])}}
                        @error('code') <p style="color:red;">{{$message}} </p> @enderror
                    </div>
                    <div class="form-group">
                        {{Form::label('base_url','Base url: (Please write only one word) ')}}
                        {{Form::text('base_url','',['class'=>'form-control border-input','placeholder'=>'london'])}}
                        @error('base_url') <p style="color:red;">{{$message}} </p> @enderror
                    </div>

                    <div class="form-group">
                        {{Form::label('description','Product Description:')}}
                        {{Form::textarea('description','',['class'=>'form-control border-input','placeholder'=>'Product Description'])}}
                        @error('description') <p style="color:red;">{{$message}} </p> @enderror
                    </div>
                    <h4 style="font-weight: bold;">Choose witch products you wonna put in this store?</h4>
                    @foreach($products as $product)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="product_id[]" value="{{$product->id}}"> {{$product->name}}
                            </label>
                        </div>
                    @endforeach

                    <div class="form-group">
                        {{Form::submit('Add New Store',['class'=>'btn btn-primary btn-sm btn-submit','style'=>'background-color:lightseagreen;color:white'])}}

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>



        </div>
    </div>



@endsection
