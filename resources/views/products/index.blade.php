@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD example step by step</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
            </div>
        </div>

    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
        
    @endif

    <table class="table table-borderd">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->prodName }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a href="{{ route('products.show',$product->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">DELETE</button>
                    
                    
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

{{-- {!! $products->link() !!} --}}


@endsection
