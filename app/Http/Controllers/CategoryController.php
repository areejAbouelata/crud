<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
        
    public function index (){
        $categories = Category::latest()->get();
        return view('index' , compact('categories'));
    }
    
        public function create(){
            return view('category.create');
        }
      public function stor (Request $request){
    //      validate

          $this->validate(request() , [
              'name'=>'required'

          ]);
    // store
          Category::create($request->all());

          return redirect('/');

      }

public  function  display(Category $cat){
    
    return view('products.allproducts' , compact('cat'));
}


}
