<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function getAll()
    {
        return Category::all();
    }  
    //get products by category id
    public static function getProducts($id)
    {
        //find products by category id
        $products = Product::where('category_id', $id)->get();
        return $products;
            
        // return Category::find($id)->products;
    }
    //get single category by id
    public static function getCategory($id)
    {
        return Category::find($id);
    }
}
