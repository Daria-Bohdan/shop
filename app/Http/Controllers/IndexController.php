<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index() {
    	// $user = new \App\Users();

$user = \App\Users ::where('username','LIKE', '%o%')->get();

    echo '<pre>';
    var_dump($user);
}

}
