@extends('admin.layout.master')
@section('title') Edit Products @endsection
@section('content')

    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>Edit Product</h1>

        </div>
    </div>

    <a href="{{route('admin.product.index')}}" class="btn btn-primary btn-sm " role="button" style="width:70px;">Go Back</a>

    <div class="row">

        <div class="col-md-9">
            {!! Form::model($product,['method'=>'post','action'=>['App\Http\Controllers\Admin\ProductController@update',$product->id]]) !!}
            <hr>
            <div class="form-group">
                {{Form::label('name','Product Name:')}}
                {{Form::text('name',$product->name,['class'=>'form-control border-input','placeholder'=>'Alcatel'])}}
                @error('name')<p style="color:red;">{{$message}}</p> @enderror
            </div>
            <div class="form-group">
                {{Form::label('sku','Sku:')}}
                {{Form::text('sku',$product->sku,['class'=>'form-control border-input','placeholder'=>'Al-1234'])}}
                @error('sku') <p style="color:red;">{{$message}} </p> @enderror
            </div>
            <div class="form-group">
                {{Form::label('description','Product Description:')}}
                {{Form::textarea('description',$product->description,['class'=>'form-control border-input','placeholder'=>'Product Description'])}}
                @error('description') <p style="color:red;">{{$message}} </p> @enderror
            </div>
            <div class="form-group">
                {{Form::label('price','Product Price:($)')}}
                {{Form::text('price',$product->price,['class'=>'form-control border-input','placeholder'=>'2500'])}}
                @error('price') <p style="color:red;">{{$message}} </p> @enderror
            </div>
            <div class="form-group">
                {{Form::label('slug','Product Slug: ')}}
                {{Form::text('slug',$product->slug,['class'=>'form-control border-input','placeholder'=>'Product Name'])}}
                @error('slug') <p style="color:red;">{{$message}} </p> @enderror
            </div>
            <div class="form-group">
                {{Form::submit('Update Product',['class'=>'btn btn-primary btn-submit btn-sm','style'=>'background-color:lightseagreen;color:white'])}}

            </div>
            {!! Form::close() !!}
        </div>


    </div>



@endsection



