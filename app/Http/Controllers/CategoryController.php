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
            return view('categories.index', ['categories' => $cats]);
        } else {
            abort(404);
        }
    }

    public static function show(Category $category){
        return view('categories.show', [
            'heading' => "Show Category: {$category->name}",    
            'category' => $category,
        ]);  

    }
}
