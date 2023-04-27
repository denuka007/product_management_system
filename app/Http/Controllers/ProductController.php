<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use File;

class ProductController extends Controller
{
    public function AddProduct(Request $request) {

        //input validating
        $request->validate([
            'description'=>'min:15',
            'price'=>'required'
        ]);

        //adding data into database
        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        //adding image
        $filename = time() . "." . $request->image->extension();
        $request->image->move(public_path('assets/uploads'), $filename);
        $product->image = $filename;

        $product->save();

        return back();
    }

    public function ViewProduct() {

        $products = Product::all();
        return view('product.product_view', compact('products'));
    }

    //delete data from database
    public function DeleteProduct($Id) {

        $pro = Product::find($Id);

        $path = 'assets/uploads'.$pro->image; //image deleting
            if(File::exists($path))
            {
                File::delete($path);
            }

        $pro->delete();

        return back();
    }

    public function UpdateProduct($Id) {

        $pro = Product::find($Id);
        return view('product.product_update',compact('pro'));
    }

    //updating the data
    public function UpdateProductDone(Request $request, $Id) {

        $product = Product::find($Id);

        if($request->hasfile('image')) //checking image available
       {
        $filename = time() . "." . $request->image->extension();
        $request->image->move(public_path('assets/uploads'), $filename);
        $product->image = $filename;
        $product->update();
       }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->update();

        return redirect(route('prodcut.view'));

    }
}
