<?php


namespace App;


use Illuminate\Support\Facades\Session;

class Basket
{

	static public function getBasket() {
		$basket = Session::get('basket');
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

		return ['products' => $result, 'total' => $total];

	}
}