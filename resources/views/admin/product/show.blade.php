@extends('admin.layout.master')
@section('title') Show Product @endsection
@section('content')

    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>Product Name: {{$product->name}}</h1>
            <h6>SKU: {{$product->sku}}</h6>
            <p>{{$product->description}}</p>
            <h4>Price: {{$product->price}}</h4>
            <hr>
            <a href="{{route('admin.product.index')}}" class="btn btn-primary btn-sm " role="button" style="width:70px;">Go Back</a>
        </div>
    </div>


@endsection



