@extends('layouts.admin')

@section('content')

    @if (isset($product) === true)
        <h3>Update product</h3>
    @else
        <h3>Create product</h3>
    @endif


    <form action="" method="post" enctype="multipart/form-data">
        @csrf


         @if (isset($product) === true)
            <input type="hidden" value="{{ $product->id }}" name="id">
        @endif


        <div class="form-group">
            <label for="name">Name</label>
           <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" {{ isset($product) ? 'value=' . $product->name : '' }}>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file"  name="image"  class="form-control-file" id="image" placeholder="Upload image">
        </div>
        <div class="form-group">
             <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description">{{ isset($product) ? $product->description : '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="quantity" value="1" {{ isset($product) ? 'value=' . $product->quantity : '' }}>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" id="price" {{ isset($product) ? 'value=' . $product->price : '' }}>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>


@endsection
