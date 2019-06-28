<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
	public function index(Request $request) {
		$basket = $request->session()->get('basket');
		$ids = array_keys($basket);
		$products = Product::find($ids);

		$result = [];
		$total = 0;

		foreach ($products as $product) {
			$result[$product->id] = [
				'id'   => $product->id,
				'name'   => $product->name,
				'qt'     => $basket[$product->id],
				'price'  => $basket[$product->id] * $product->price
			];

			$total += $basket[$product->id] * $product->price;
		}

		return view('basket' , ['products' => $result, 'total' => $total]);
	}


    public function addToBasket(Request $request) {

    	$basket = $request->session()->get('basket');
        $id     = $request->input('product_id');
        $qt     = (int) $request->input('quantity');

        if (isset($basket[$id]) === true) {
            $basket[$id] += $qt;
        } else {
            $basket[$id] = $qt;
        }

    	$request->session()->put('basket', $basket);

    	return redirect ('basket');
    }


    public function checkout() {
    	echo 'checkout';
    }
}



   