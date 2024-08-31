<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BrandController extends Controller
{
    // Show all brands
    public function AllBrand(){
        $brands = Brand::latest()->get();
        return view('backend.brand.brand_all',compact('brands'));
    } 

    // Add brand page view
    public function AddBrand(){
        return view('backend.brand.brand_add');
   } 

   // Add brand 
   public function StoreBrand(Request $request){

    $request->validate([
        'brand_name' => 'required',
        'brand_image' => 'required',

    ]);
    

    $manager = new ImageManager(new Driver());
    $name_gen = hexdec(uniqid()).'.'.$request->file('brand_image')->getClientOriginalExtension();
    $img = $manager->read($request->file('brand_image'));
    $img->toJpeg(80)->save(base_path('public/upload/brand/'.$name_gen));
    Brand::insert([
        'brand_name' => $request->brand_name,
        'brand_slug' => strtolower(str_replace(' ', '-',$request->brand_name)),
        'brand_image' => 'upload/brand/'.$name_gen,
        
    ]);

 
    $notification = array(
        'message' => 'Brand Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.brand')->with($notification); 

   }

    // edit brand bage view  
   public function EditBrand($id){
    $brand = Brand::findOrFail($id);
    return view('backend.brand.brand_edit',compact('brand'));
    } 




    // update brand
   public function UpdateBrand(Request $request){

    $brand_id = $request->id;
    $old_image = $request->old_image;


    if ($request->file('brand_image')) {
        
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$request->file('brand_image')->getClientOriginalExtension();
        $img = $manager->read($request->file('brand_image'));
        $img->toJpeg(80)->save(base_path('public/upload/brand/'.$name_gen));

       
        if (file_exists($old_image)) {
            unlink($old_image);
         }

        Brand::findOrFail($brand_id)->update([
            'brand_name' => $request->brand_name,
            'brand_slug' => strtolower(str_replace(' ', '-',$request->brand_name)),
            'brand_image' => 'upload/brand/'.$name_gen,
        ]);

        $notification = array(
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.brand')->with($notification); 
        
    }
    else{
        
        Brand::findOrFail($brand_id)->update([
            'brand_name' => $request->brand_name,
            'brand_slug' => strtolower(str_replace(' ', '-',$request->brand_name)),
        ]);

        
        $notification = array(
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.brand')->with($notification); 
        
    }
    
    }

    // delete brand item
    public function DeleteBrand($id){

        $brand = Brand::findOrFail($id);
        $img = $brand->brand_image;
        @unlink($img); 

        Brand::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Brand Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }


}