@extends('layouts.master')

@section('content')
@foreach($products as $product)
	<div class="col-lg-3">
		<h3>{{ $product->name }}</h3>
		<img src="{{ url('storage/product/' . $product->image) }}" alt="" width="200">
		<div>{{ $product->description }}</div>
		<div><span>{{ $product->price }} $</span> <span>Qt: {{ $product->quantity }}</span></div>
	</div>	

@endforeach
@endsection

