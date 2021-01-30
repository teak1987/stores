@extends('admin.layout.master')
@section('title') Show Store @endsection
@section('content')

    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>Name Store: {{$store->name}}</h1>
            <h3>SKU: {{$store->code}}</h3>
            <h6>Base url: {{$store->base_url}}</h6>
            <p>{{$store->description}}</p>
            <h4>
                @if($store->product_id != '')
                    Products:
                <hr>
                <ol>
                    @foreach(explode(',', $store->product_id) as $product)
                       <li> <a href="#" style="font-size: 18px;">{{$product}}</a></li>
                     <br>
                    @endforeach
                </ol>
                @endif
            </h4>
            <hr>
            <a href="{{route('admin.store.index')}}" class="btn btn-primary btn-sm " role="button" style="width:70px;">Go Back</a>
        </div>
    </div>

@endsection

