@extends('admin.layout.master')
@section('title') Edit Store @endsection
@section('content')

    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>Edit Store</h1>
            <a href="{{route('admin.store.index')}}" class="btn btn-primary btn-sm " role="button" style="width:70px;">Go Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {!! Form::model($store,['method'=>'post','action'=>['App\Http\Controllers\Admin\StoreController@update',$store->id]]) !!}
            <div class="form-group">
                {{Form::label('name','Store Name:')}}
                {{Form::text('name',$store->name,['class'=>'form-control border-input','placeholder'=>'Lidl '])}}
                @error('name')<p style="color:red;">{{$message}}</p> @enderror
            </div>
            <div class="form-group">
                {{Form::label('code','Code:')}}
                {{Form::text('code',$store->code,['class'=>'form-control border-input','placeholder'=>'Code-1234'])}}
                @error('code') <p style="color:red;">{{$message}} </p> @enderror
            </div>
            <div class="form-group">
                {{Form::label('base_url','Base url: (Please write only one word)')}}
                {{Form::text('base_url',$store->base_url,['class'=>'form-control border-input','placeholder'=>'london'])}}
                @error('base_url') <p style="color:red;">{{$message}} </p> @enderror
            </div>

            <div class="form-group">
                {{Form::label('description','Product Description:')}}
                {{Form::textarea('description',$store->description,['class'=>'form-control border-input','placeholder'=>'Product Description'])}}
                @error('description') <p style="color:red;">{{$message}} </p> @enderror
            </div>

            <h4 style="font-weight: bold;">Choose witch products you wonna put in this store?</h4>
{{--            @foreach($products as $product)--}}
{{--                <div class="checkbox">--}}
{{--                    <label>--}}
{{--                        <input type="checkbox" name="product_id[]" value="{{$product->id}}"> {{$product->name}}--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--@dd(     $storeProducts )--}}


{{--            @if($storeProductsCount > 0)--}}
{{--                @for($i=1; $i<=$storeProductsCount; $i++)--}}

{{--            <div class="checkbox">--}}
{{--                <label>--}}

{{--                    <input class="form-check-input" type="checkbox" name="dodatnaopremljenost_id[]" value="{{$storeProductsCount}}" checked  > {{$store->product->name}}--}}
{{--                </label>--}}
{{--            </div>--}}
{{--                @endfor--}}
{{--            @endif--}}

            <div class="form-group">
                {{Form::submit('Edit Store',['class'=>'btn btn-primary btn-sm btn-submit','style'=>'background-color:lightseagreen;color:white'])}}

            </div>
            {!! Form::close() !!}
        </div>
    </div>





@endsection
