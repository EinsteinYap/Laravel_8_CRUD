@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDIT Product</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    Whoops! There were some problems with your inputs. <br><br>
    <ul>
        
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    
</div>
@endif
<form action="{{ route('products.update',$product->id) }}" method="POST">
      {{-- for security purpose  --}}
    @csrf
    @method('PUT') 
    {{-- for security purpose  --}}
    <div class="row">
<div class="col-xs-12 col-sm-12 col-12">
<div class="form-group">
   Product Name:
    <input type="text" name="prodName" class="form-control" placeholder="Enter Name" value="{{ $product->prodName }}">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        Description:
        <textarea name="description" class="form-control" style="height: 150px" placeholder="Description">{{ $product->description }}
        </textarea>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-12">
    <div class="form-group">
        Price:
        <input type="text" name="price" class="form-control" placeholder="Price" value={{ $product->price }}>
    </div>
    </div>
<div class="col-xs-12 col-sm-12 col-12 text-center">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>
</div>

</form>

@endsection