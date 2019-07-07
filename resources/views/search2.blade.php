@extends('layouts.master')

@section('content')
    <ul>
    @foreach($products as $product)
        <li><img width="200" src="{{ asset('storage/product/' . $product['image']) }}" alt=""> <span><strong>{{$product['name']}}</strong></span> <span> price: {{ $product['price'] }} $</span></li>
    @endforeach
    </ul>
@endsection

