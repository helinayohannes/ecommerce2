<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function register()
    {
    return view('Category.register');
    }
      function store(Request $request)
      
      {
        $Category =new Category();
        $Category->name = $request->name;
       $is_saved = $Category->save();
      if($is_saved){
      echo " YOUR DATA IS SAVED SUCCESFULLLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
{
 $Category = Category::all();
 return view('Category.get_all', compact('Cetagory'));
}
public function get_by_id($id)
 {
  $Category = Category::where('id', $id)->first();
  return view('Category.get_by_id', compact('Category'));
  }
}
