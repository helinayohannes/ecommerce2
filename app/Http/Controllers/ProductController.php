<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function register(Request $request){
    //
  /*  $Product = Product::create([
       'name' => 'ecommerce Product',
        'unit' => '50',
        'price' => '50',
        'quantity' => '50',
        ]);
        echo 'Product: ', $Product->name;*/

return view('Product.register');
function store(Request $request)
{
    $Product = new Product();
    $Product->name= $request->name;
    $Product->unit= $request->unit;
    $Product->price= $request->price;
    $Product->quantity= $request->quantity;
    $is_saved = $Product->save();
 if($is_saved){
 echo "Record saved successfully.";
 }
 else{
 echo "Sorry, try again something went wrong.";
 }


}

       
}
public function get_all()
{
 $Product = Product::all();
 return view('Product.get_all', compact('Product'));
}
}