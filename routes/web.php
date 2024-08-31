<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/',  [PagesController::class,'home']);

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [UserController::class,'UserDashboard'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);

require __DIR__.'/auth.php';


Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('adminDashboard');
    Route::get('/logout', [AdminController::class, 'AdminDestroy'])->name('adminLogout');
    Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('adminProfile');
    Route::post('/profile/store', [AdminController::class, 'AdminProfileStore'])->name('adminProfileStore');
    Route::get('/change/password', [AdminController::class, 'AdminChangePassword'])->name('adminChangePassword');
    Route::post('/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('adminUpdatePassword');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('adminLogin');


Route::get('/search', [SearchController::class, 'search'])->name('search');

//front end pages routes

    
    Route::get('/menAll',[PagesController::class,'men'])->name('menPage');
    Route::get('/menPants',[PagesController::class,'menPants'])->name('menPantsPage');
    Route::get('/menTshirts',[PagesController::class,'menTshirts'])->name('menTshirtsPage');
    Route::get('/menShirts',[PagesController::class,'menShirts'])->name('menShirtsPage');
    Route::get('/menHomeWear',[PagesController::class,'menHomeWear'])->name('menHomeWearPage');
    Route::get('/menBags',[PagesController::class,'menBags'])->name('menBagsPage');


//women
    
    Route::get('/womenAll',[PagesController::class,'women'])->name('womenPage');
    Route::get('/womenPants',[PagesController::class,'womenPants'])->name('womenPantsPage');
    Route::get('/womenTshirts',[PagesController::class,'womenTshirts'])->name('womenTshirtsPage');
    Route::get('/womenShirts',[PagesController::class,'womenShirts'])->name('womenShirtsPage');
    Route::get('/womenHomeWear',[PagesController::class,'womenHomeWear'])->name('womenHomeWearPage');
    Route::get('/womenBags',[PagesController::class,'womenBags'])->name('womenBagsPage');
    

//jewells

Route::get('/jewells',[PagesController::class,'jewells'])->name('jewellsPage');

//sale

Route::get('/sale',[PagesController::class,'sale'])->name('salePage');

//new arrivals

Route::get('/newArrivals',[PagesController::class,'newArrivals'])->name('newArrivalsPage');

//best sellers

Route::get('/bestSellers',[PagesController::class,'bestSellers'])->name('bestSellersPage');

//wish list

Route::get('/wishList',[PagesController::class,'wishList'])->name('wishListPage');

//buy bag

Route::get('/yourBag',[PagesController::class,'buyBag'])->name('buyBagPage');


//summer colliction

Route::get('/summerColliction',[PagesController::class,'summerColliction'])->name('summerCollictionPage');

//spring colliction

Route::get('/springColliction',[PagesController::class,'springColliction'])->name('springCollictionPage');

//winter colliction

Route::get('/winterColliction',[PagesController::class,'winterColliction'])->name('winterCollictionPage');

//autumn colliction

Route::get('/autumnColliction',[PagesController::class,'autumnColliction'])->name('autumnCollictionPage');


Route::middleware(['auth','role:admin'])->group(function() {


    // Brand All Route 
   Route::controller(BrandController::class)->group(function(){
       Route::get('/all/brand' , 'AllBrand')->name('all.brand');
       Route::get('/add/brand' , 'AddBrand')->name('add.brand');
       Route::post('/store/brand' , 'StoreBrand')->name('store.brand');
       Route::get('/edit/brand/{id}' , 'EditBrand')->name('edit.brand');
       Route::post('/update/brand' , 'UpdateBrand')->name('update.brand');
       Route::get('/delete/brand/{id}' , 'DeleteBrand')->name('delete.brand');

       
       
   
   });
   
   
   }); 

Route::middleware(['auth','role:admin'])->group(function() {


    // product All Route 
   Route::controller(ProductController::class)->group(function(){
       Route::get('/all/product' , 'AllProduct')->name('all.product');
       Route::get('/add/product' , 'AddProduct')->name('add.product');
       Route::post('/store/product' , 'StoreProduct')->name('store.product');
       Route::get('/edit/product/{id}' , 'EditProduct')->name('edit.product');
       Route::post('/update/product' , 'UpdateProduct')->name('update.product');
       Route::get('/delete/product/{id}' , 'DeleteProduct')->name('delete.product');

   
   });
   
   
   }); 