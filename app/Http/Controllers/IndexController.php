<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }

    public function getOrders () {
        $user = Auth::user();

        return view('orders', ['orders' => $user->orders]);
    }


    public function search(Request $request) {
        $word = $request->input('word');

        $products = Product::where('name', 'LIKE', '%' . $word . '%')->get();

        $result = [];

        foreach ($products as $product) {
            $result[] = [
                'id'   => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price
            ];
        }

        return $result;
    }


    public function search2(Request $request) {
        $word = $request->input('word');

        $products = Product::where('name', 'LIKE', '%' . $word . '%')->limit(15)->get();

        $result = [];

        foreach ($products as $product) {
            $result[] = [
                'id'   => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price
            ];
        }

        return view('search2', ['products' => $result]);
    }

}
