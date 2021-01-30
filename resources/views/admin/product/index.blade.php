@extends('admin.layout.master')
@section('title') Products All @endsection
@section('content')

    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>Products All</h1>

            @if(session()->has('msg'))
                <div style="background-color: lightgreen; height:35px;padding: 3px;">
                    <strong>{{session()->get('msg')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <hr style="border:3px dashed lightslategrey">

            <div class="content table-responsive table-full-width">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="font-weight: bolder;">Id</th>
                        <th style="font-weight: bolder;">Name</th>
                        <th style="font-weight: bolder;">Sku</th>
                        <th style="font-weight: bolder;">Description</th>
                        <th style="font-weight: bolder;">Price</th>
                        <th style="font-weight: bolder;">Slug</th>
                        <th style="font-weight: bolder;">Edit</th>
                        <th style="font-weight: bolder;">Show</th>
                        <th style="font-weight: bolder;">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->sku}}</td>
                            <td style="width:615px;">{{Illuminate\Support\Str::limit($product->description,85)}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->slug}}</td>
                            <th style="width:90px;">{{link_to_route('admin.product.edit','Edit',$product->id,['class'=>'btn  btn-sm ti-pencil','style'=>'width:70px;color:white;background-color:green'])}}    </th>
                            @if($product->slug)
                            <th style="width:90px;">{{link_to_route('admin.product.show','Show Product',$product->slug,['class'=>'btn btn-info btn-sm ti-list'])}}</th>
                            @else
                                <th style="width:90px;">{{link_to_route('admin.product.show','Show Product',$product->id,['class'=>'btn btn-info btn-sm ti-list'])}}</th>
                            @endif
                            <th style="width:90px;"> {!! Form::open(['route'=>['admin.product.delete',$product->id],'method'=>'post']) !!}
                                {{Form::submit('Delete',['type'=>'submit','class'=>'btn btn-danger btn-sm','onclick'=>'return confirm("Are you sure you want to delete this product?")'])}}
                                {!! Form::close() !!}</th>
                           </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <!--------Pagination------>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-5 ">
                {{$products->render()}}
            </div>
        </div>
        <!--------End Pagination------>

@endsection

