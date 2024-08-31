<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class ProductController extends Controller{


    public function AllProduct(){
        $products = Product::latest()->get();
        return view('backend.product.product_all',compact('products'));
    } 

    public function AddProduct(){
        return view('backend.product.product_add');
   } 


   public function StoreProduct(Request $request){

    $request->validate([
        'product_name' => 'required|string|max:255',
        'product_price' => 'required|numeric|min:0',
        'sale' => 'nullable|boolean',
        'new_arrival' => 'nullable|boolean',
        'best_seller' => 'nullable|boolean',
        'gender' => 'nullable|in:male,female,unisex',
        'product_description' => 'nullable|string',
        'product_category' => 'required|string|max:255',
        'product_img' => 'required',
        'product_color' => 'nullable|string|max:50',
        'season' => 'nullable|string|max:50',
        'quantity' => 'required|integer|min:0',
        'product_size' => 'nullable|string|max:20',
        'discount' => 'nullable|numeric|min:0|max:100',

    ]);
    

    $manager = new ImageManager(new Driver());
    $name_gen = hexdec(uniqid()).'.'.$request->file('product_img')->getClientOriginalExtension();
    $img = $manager->read($request->file('product_img'));
    $img->toJpeg(80)->save(base_path('public/upload/product/'.$name_gen));
    Product::insert([
        'product_name' => $request->product_name,
        'product_price' => $request->product_price,
        'sale' => $request->has('sale') ? 1 : 0,
        'new_arrival' => $request->has('new_arrival') ? 1 : 0,
        'best_seller' => $request->has('best_seller') ? 1 : 0,
        'gender' => $request->gender,
        'product_description' => $request->product_description,
        'product_category' => $request->product_category,
        'product_img' => 'upload/product/'.$name_gen,
        'product_color' => $request->product_color,
        'season' => $request->season,
        'quantity' => $request->quantity,
        'product_size' => $request->product_size,
        'discount' => $request->discount,
        
    ]);

 
    $notification = array(
        'message' => 'Brand Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.product')->with($notification); 

   }


   public function EditProduct($id){
    $product = Product::findOrFail($id);
    return view('backend.product.product_edit',compact('product'));
    } 



  // update brand
  public function UpdateProduct(Request $request){

    $product_id = $request->id;
    $old_image = $request->old_image;


    if ($request->file('product_img')) {
        
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$request->file('product_img')->getClientOriginalExtension();
        $img = $manager->read($request->file('product_img'));
        $img->toJpeg(80)->save(base_path('public/upload/product/'.$name_gen));

       
        if (file_exists($old_image)) {
            unlink($old_image);
         }

        Product::findOrFail($product_id)->update([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'sale' => $request->has('sale') ? 1 : 0,
            'new_arrival' => $request->has('new_arrival') ? 1 : 0,
            'best_seller' => $request->has('best_seller') ? 1 : 0,
            'gender' => $request->gender,
            'product_description' => $request->product_description,
            'product_category' => $request->product_category,
            'product_img' => 'upload/product/'.$name_gen,
            'product_color' => $request->product_color,
            'season' => $request->season,
            'quantity' => $request->quantity,
            'product_size' => $request->product_size,
            'discount' => $request->discount,
        ]);

        $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification); 
        
    }
    else{
        
        Product::findOrFail($product_id)->update([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'sale' => $request->has('sale') ? 1 : 0,
            'new_arrival' => $request->has('new_arrival') ? 1 : 0,
            'best_seller' => $request->has('best_seller') ? 1 : 0,
            'gender' => $request->gender,
            'product_description' => $request->product_description,
            'product_category' => $request->product_category,
            'product_color' => $request->product_color,
            'season' => $request->season,
            'quantity' => $request->quantity,
            'product_size' => $request->product_size,
            'discount' => $request->discount,
        ]);

        
        $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification); 
        
    }
    
    }


    public function DeleteProduct($id){

        $product = Product::findOrFail($id);
        $img = $product->product_img;
        @unlink($img); 

        Product::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }

}
