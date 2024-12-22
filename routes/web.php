<?php

use App\Models\Food;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// use App\Models\Product;
// use Illuminate\Support\Facades\DB;

Route::get('query/sql', function () {
    $products = DB::select("SELECT * FROM products");
    // $products = DB::select("SELECT * FROM products WHERE price > 100");
    return view('query-test', compact('products'));
});

Route::get('query/builder', function () {
    $products = DB::table('products')->get();
    // $products = DB::table('products')->where('price', '>', 100)->get();
    return view('query-test', compact('products'));
});

Route::get('query/orm', function () {
    $products = Product::get();
    // $products = Product::where('price', '>', 100)->get();
    return view('query-test', compact('products'));
});

Route::get('barchart', function () {    
    return view('barchart');
})->name('barchart');


Route::get('/shop', function () { 
    $foods = Food::get();
    // $foods = Food::where('price', '>', 100)->get();
    return view('shop', compact('foods'));
})->name('shop'); // กำหนดชื่อให้กับ route นี้
