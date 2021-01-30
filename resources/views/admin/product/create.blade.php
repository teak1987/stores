@extends('admin.layout.master')
@section('title') Create Products @endsection
@section('content')

    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>Create Product</h1>


            <div class="row">
                <div class="col-md-12">
                    {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\Admin\ProductController@store']) !!}
                    <div class="form-group">
                        {{Form::label('name','Product Name:')}}
                        {{Form::text('name','',['class'=>'form-control border-input','placeholder'=>'Alcatel '])}}
                        @error('name')<p style="color:red;">{{$message}}</p> @enderror
                    </div>
                    <div class="form-group">
                        {{Form::label('sku','Sku:')}}
                        {{Form::text('sku','',['class'=>'form-control border-input','placeholder'=>'Al-1234'])}}
                        @error('sku') <p style="color:red;">{{$message}} </p> @enderror
                    </div>

                    <div class="form-group">
                        {{Form::label('description','Product Description:')}}
                        {{Form::textarea('description','',['class'=>'form-control border-input','placeholder'=>'Product Description'])}}
                        @error('description') <p style="color:red;">{{$message}} </p> @enderror
                    </div>
                    <div class="form-group">
                        {{Form::label('price','Product Price:($) ')}}
                        {{Form::text('price','',['class'=>'form-control border-input','placeholder'=>'800'])}}
                        @error('price') <p style="color:red;">{{$message}} </p> @enderror
                    </div>
                    <div class="form-group">
                        {{Form::label('slug','Product Slug: ')}}
                        {{Form::text('slug','',['class'=>'form-control border-input','placeholder'=>'Product Name'])}}
                        @error('slug') <p style="color:red;">{{$message}} </p> @enderror
                    </div>
                    <div class="form-group">
                        {{Form::submit('Add New Product',['class'=>'btn btn-primary btn-sm btn-submit','style'=>'background-color:lightseagreen;color:white'])}}

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>



        </div>
    </div>


@endsection

