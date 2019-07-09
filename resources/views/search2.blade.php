@extends('layouts.master')

@section('content')
    <ul>
    @foreach($products as $product)
        <li><a href="{{ url('/shop/1/' . $product['id']) }}"><img width="200" src="{{ asset('storage/product/' . $product['image']) }}"  alt=""> <span><strong>{{$product['name']}}</strong></span> <span> price: {{ $product['price'] }} $</span></a></li>

    @endforeach
    </ul>
@endsection



