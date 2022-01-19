@extends('layouts.app')



@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Welcome</h1>
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
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Products Master List') }}
                        <div class="float-right">
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalCreate">{{ __('New Product') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm table-striped">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($products as $product =>$value)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->detail }}</td>
                                <td>
                                    <form action="{{ route('products.destroy',$value->id) }}" method="POST">

                                        <a href="{{ route('products.show',$value->id) }}" class="btn btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a href="{{ route('products.edit',$value->id) }}" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('products.create')

@endsection