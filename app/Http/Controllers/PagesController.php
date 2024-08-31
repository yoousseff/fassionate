<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class PagesController extends Controller
{
 
    public function home(){
        $products = Product::where('gender', 'female')->limit(3)->offset(0)->get();


        return view('frontend.home',compact("products"));
    }
 
    public function mencard(){
        $products = Product::where('gender', 'male')->limit(3)->offset(0)->all();

        return view('userPages.cards.mencard',compact('products'));
    }
 
    public function womencard(){
        $products = Product::where('gender', 'female')->limit(3)->offset(0)->get();

        return view('userPages.cards.womencard',compact('products'));
    }
 
    public function jewellscard(){
        $products = Product::where('product_category', 'jewells')->limit(3)->offset(0)->get();

        return view('userPages.cards.jewellscard',compact('products'));
    }
 
    public function newarrivalscard(){
        $products = Product::where('new_arrival', 1)->limit(3)->offset(0)->get();

        return view('userPages.cards.newarrivalscard',compact('products'));
    }
    public function bestsellerscard(){
        $products = Product::where('best_seller', 1)->limit(3)->offset(0)->get();

        return view('userPages.cards.bestsellercard',compact('products'));
    }
    //men part
    public function men(){
        $products = Product::where('gender', 'male')->get();
        return view('userPages.menPages.men',compact('products'));
    }
    public function menPants(){
        $products = Product::where('gender', 'male')->where('product_category', 'pants')->get();
        return view('userPages.menPages.pants',compact('products'));
    }
    public function menTshirts(){
        $products = Product::where('gender', 'male')->where('product_category', 't-shirts')->get();
        return view('userPages.menPages.tshirts',compact('products'));
    }
    public function menShirts(){
        $products = Product::where('gender', 'male')->where('product_category', 'shirts')->get();
        return view('userPages.menPages.shirts',compact('products'));
    }
    public function menHomeWear(){
        $products = Product::where('gender', 'male')->where('product_category', 'homewear')->get();
        return view('userPages.menPages.homewear',compact('products'));
    }
    public function menBags(){
        $products = Product::where('gender', 'male')->where('product_category', 'bags')->get();
        return view('userPages.menPages.bags',compact('products'));
   
    }

    //women part
    public function women(){
        $products = Product::where('gender', 'female')->get();
        return view('userPages.womenPages.women' ,compact('products'));
    }
    public function womenPants(){
        $products = Product::where('gender', 'female')->where('product_category', 'pants')->get();

        return view('userPages.womenPages.pants',compact('products'));
    }
    public function womenTshirts(){
        $products = Product::where('gender', 'female')->where('product_category', 't-shirts')->get();

        return view('userPages.womenPages.tshirts',compact('products'));
    }
    public function womenShirts(){
        $products = Product::where('gender', 'female')->where('product_category', 'shirts')->get();

        return view('userPages.womenPages.shirts',compact('products'));
    }
    public function womenHomeWear(){
        $products = Product::where('gender', 'female')->where('product_category', 'homewear')->get();

        return view('userPages.womenPages.homewear',compact('products'));
    }
    public function womenBags(){
        $products = Product::where('gender', 'female')->where('product_category', 'bags')->get();

        return view('userPages.womenPages.bags',compact('products'));
    
    }

    //jewells
     
    public function jewells(){
        $products = Product::where('product_category', 'jewells')->get();

        return view('userPages.jewells' ,compact('products'));
    }

    //sale
     
    public function sale(){
        $products = Product::where('sale', 1)->get();
        

        return view('userPages.sale',compact('products'));
    }
    
    //new arrivals
     
    public function newArrivals(){
        $products = Product::where('new_arrival', 1)->get();

        return view('userPages.newarrivals',compact('products'));
    }
    
    //best sellers
     
    public function bestSellers(){
        $products = Product::where('best_seller', 1)->get();

        return view('userPages.bestsellers',compact('products'));
    }

    //wish List
     
    public function wishList(){
        return view('userPages.wishlist');
    }

    //buy bag
     
    public function buyBag(){
        return view('userPages.buybag');
    }
    
    //SUMMER COLLICTION
     
    public function summerColliction(){
        $products = Product::where('season', 'summer')->get();

        return view('userPages.summer',compact('products'));
    }
    
    //spring colliction
     
    public function springColliction(){
        $products = Product::where('season', 'spring')->get();

        return view('userPages.spring',compact('products'));
    }
    
    //winter colliction
     
    public function winterColliction(){
        $products = Product::where('season', 'winter')->get();

        return view('userPages.winter',compact('products'));
    }
   
    //winter colliction
     
    public function autumnColliction(){
        $products = Product::where('season', 'autumn')->get();

        return view('userPages.autumn',compact('products'));
    }
    
  
}
