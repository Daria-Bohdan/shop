@extends('layouts.master')

@section('content')

<div class="col-lg-8">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product['id'] }}</th>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['qt']  }}</td>
                <td>{{ $product['price']  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

	 <h4>Total price: {{ $total }}</h4>

	    <div>
	        <a class="btn btn-info" href="{{ url('/basket/checkout') }}">Checkout</a>
	    </div>
	</div>

  @endsection
