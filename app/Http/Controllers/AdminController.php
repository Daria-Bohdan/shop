<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

     public function products() {
        $products = Product::all();

        return view('admin.product.products', ['products' => $products]);
    }


     public function updateProduct($id) {
        $product = Product::find($id);

        return view('admin.product.create', ['product' => $product]);
    }


    public function createProduct() {
        return view('admin.product.create');
    }

    public function  saveProduct (Request $request) {
         if ($request->input('id') !== null) {
            $product = Product::find($request->input('id'));
        } else {
            $product = new Product();
        }


        $product->fill($request->post());

        if ($request->hasFile('image') === true) {
            $file = $request->file('image');

            Storage::disk('public')->put('product/' . $file->getClientOriginalName(), fopen($file->getRealPath(), 'r+'));

            $product->image = $file->getClientOriginalName();
        }

        $product->category_id = 1;

        $product->save();

        return view('admin.product.create');
    }

    public function orders() {

        $orders = Order::all();

        return view('admin.orders', ['orders' => $orders]);
    }
}
