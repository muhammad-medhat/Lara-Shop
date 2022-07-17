<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public static function index(){
        $cats = Category::getAll();
        if($cats) {
            return view('categories', ['categories' => $cats]);
        } else {
            abort(404);
        }
    }

    public static function show(Category $category){
        return view('category', [
            'heading' => "Show Category: {$category->name}",    
            'category' => $category,
        ]);  

    }
}
