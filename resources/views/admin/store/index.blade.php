@extends('admin.layout.master')
@section('title') Stores @endsection
@section('content')
    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>All Stores</h1>

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
                        <th style="font-weight: bolder;">Code</th>
                        <th style="font-weight: bolder;">Base url</th>
                        <th style="font-weight: bolder;">Description</th>
                        <th style="font-weight: bolder;">Price id</th>
                        <th style="font-weight: bolder;">Edit</th>
                        <th style="font-weight: bolder;">Show</th>
                        <th style="font-weight: bolder;">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stores as $store)
                        <tr>
                            <td>{{$store->id}}</td>
                            <td>{{$store->name}}</td>
                            <td>{{$store->code}}</td>
                            <td>{{$store->base_url}}</td>
                            <td style="width:615px;">{{Illuminate\Support\Str::limit($store->description,85)}}</td>
                            <td>{{$store->product_id}}</td>
                            <th style="width:90px;">{{link_to_route('admin.store.edit','Edit',$store->id,['class'=>'btn  btn-sm ti-pencil','style'=>'width:70px;color:white;background-color:green'])}}    </th>
                            <th style="width:90px;">{{link_to_route('admin.store.show','Show Store',$store->base_url,['class'=>'btn btn-info btn-sm ti-list'])}}</th>
                            <th style="width:90px;"> {!! Form::open(['route'=>['admin.store.delete',$store->id],'method'=>'post']) !!}
                                {{Form::submit('Delete',['type'=>'submit','class'=>'btn btn-danger btn-sm','onclick'=>'return confirm("Are you sure you want to delete this store?")'])}}
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
                {{$stores->render()}}
            </div>
        </div>
        <!--------End Pagination------>


@endsection

