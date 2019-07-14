@extends('layouts.admin')

@section('content')

    <h3>All products</h3>
    <ul>
         @foreach($products as $product)
         <li><a href="{{  url('/admin/update-product/' . $product->id)}}">{{  $product->name}}</a></li>
         @endforeach
        
    </ul>
 

@endsection
