@extends('admin.layout.master')
@section('title') Dashboard @endsection
@section('content')
    <!-- Page Heading -->
    <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
            <h1>Welcome Admin!</h1>
            <hr>
            @if(session()->has('msg'))
                <div style="background-color: lightgreen; height:35px;padding: 3px;">
                    <strong>{{session()->get('msg')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            @endif
        </div>
    </div>
    <!-- /.row -->

@endsection

