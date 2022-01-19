@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Welcome Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div>




{{-- Main content --}}
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">{{ __('Show Product Details') }}</div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name </strong>
                                    {{ $product->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Details </strong>
                                    {{ $product->detail }}
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card-footer">
                        <a class="btn btn-danger" href="{{ route('products.index') }}"> Back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection