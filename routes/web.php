<?php

use App\Models\Category;
use App\Http\Controllers\CategoryController;
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


// Route::get('/categories/{id}', function ($id) {
//     $products = Category::getProducts($id);
//     // dd($products);
//     if($products){
//         return view('products', [
//             'heading' => 'All Categories',
//             'products' => $products,
//         ]);         
//     } else {
//         abort(404);
//     }

// });

// Route::get('/categories/{id}', function ($id) {
//     $products = Category::getProducts($id);
//     if($products){
//         return view('products', [
//             'products' => $products,
//         ]);         
//     } else {
//         abort(404);
//     }
// });



Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/show/{category}', [CategoryController::class, 'show']);
Route::get('categories/create', [CategoryController::class, 'create']);



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