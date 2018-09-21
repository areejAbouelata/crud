<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add(Category $cat)
    {

        return view('products.create', compact('cat'));
    }

    public function stor(Category $cat, Request $request)
    {
        // validate
        $this->validate(request(), ['name' => 'required|min:2'
            , 'description' => 'required'
            , 'price' => 'required']);

        //  store in database

        $request->merge(['category_id' => $cat->id]);
        Product::create($request->all());

        return redirect('categories/' . $cat->id);
    }

}
