<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', function () {
    $cats = Category::getAll();
    // dd($cats);
    if($cats) {
        return view('categories', ['categories' => $cats]);
    } else {
        abort(404);
    }

});

Route::get('/categories/{id}', function ($id) {
    $products = Category::getProducts($id);
    // dd($products);
    if($products){
        return view('products', [
            'heading' => 'All Categories',
            'products' => $products,
        ]);         
    } else {
        abort(404);
    }

});

Route::get('/categories/{id}', function ($id) {
    $products = Category::getProducts($id);
    if($products){
        return view('products', [
            'products' => $products,
        ]);         
    } else {
        abort(404);
    }
});





Route::get('/category/{category}', function (Category $category) {
    //dd($category);
        return view('category', [
            'heading' => "Show Category: {$category->name}",    
            'category' => $category,
        ]);         
});


            // Route::get('/category/{id}', function ($id) {
            //     $category = Category::getCategory($id);
            //     // dd($category);
            //     if($category){
            //         return view('category', [
            //             'heading' => "Show Category: {$category->name}",    
            //             'category' => $category,
            //         ]);         
            //     } else {
            //         abort(404);
            //     }
            // });