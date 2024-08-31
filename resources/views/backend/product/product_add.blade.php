@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add Product </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{Route('adminDashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Product </li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">

        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">









                <div class="col-lg-12">
                    <section>
                        <main id="content" role="main" class="w-full  mx-auto">
                            <div class="bg-white  shadow-lg  rounded-xl">
                                <div class="p-4 sm:p-7">
                                    <div class="text-center">
                                        <div class="flex items-center justify-center mb-8 text-2xl font-bold">
                                            <img src="{{asset('adminbackend/assets/images/logo-img.png')}}" class="w-52"
                                                alt="">

                                        </div>
                                        <h1 class="block text-lg font-bold text-gray-800">Add Product</h1>
                                    </div>

                                    <div class="mt-5">
                                        <form method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid gap-y-4">

                                                <div>
                                                    <label for="new_password"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Product Name
                                                    </label>
                                                    <div class="relative">
                                                        <input type="text" name="product_name" value=""
                                                            class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                        @error('product_name')
                                                        <span class="text-red-600">{{$message}}</span>
                                                        @enderror

                                                    </div>

                                                </div>
                                                <div>
                                                    <label for="new_password"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Product price
                                                    </label>
                                                    <div class="relative">
                                                        <input type="number" name="product_price" value=""
                                                            class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                        @error('product_price')
                                                        <span class="text-red-600">{{$message}}</span>
                                                        @enderror

                                                    </div>

                                                </div>
                                                <div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="sale"
                                                            name="sale" value="1">
                                                        <label class="form-check-label" for="sale">On Sale</label>
                                                    </div>
                                                    @error('sale')
                                                    <span class="text-red-600">{{$message}}</span>
                                                    @enderror


                                                </div>
                                                <div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="new_arrival"
                                                            name="new_arrival" value="1">
                                                        <label class="form-check-label" for="new_arrival">New
                                                            arrival</label>
                                                    </div>
                                                    @error('sale')
                                                    <span class="text-red-600">{{$message}}</span>
                                                    @enderror


                                                </div>
                                                <div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="best_seller"
                                                            name="best_seller" value="1">
                                                        <label class="form-check-label" for="best_seller">Best
                                                            Seller</label>
                                                    </div>
                                                    @error('sale')
                                                    <span class="text-red-600">{{$message}}</span>
                                                    @enderror


                                                </div>


                                                <div class="form-group">
                                                    <label for="gender"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Gender</label>
                                                    <select
                                                        class="form-control block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                                        id="gender" name="gender">
                                                        <option value="">Select Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="unisex">Unisex</option>
                                                    </select>
                                                    @error('gender')
                                                    <span class="text-red-600">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="product_description"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Description</label>
                                                    <textarea
                                                        class="form-control block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                                        id="description" name="product_description" rows="3"></textarea>
                                                    @error('product_description')
                                                    <span class="text-red-600">{{$message}}</span>
                                                    @enderror
                                                </div>


                                                <div>
                                                    <label for="new_password"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Product Category
                                                    </label>
                                                    <div class="relative">
                                                        <input type="text" name="product_category" value=""
                                                            class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                        @error('product_category')
                                                        <span class="text-red-600">{{$message}}</span>
                                                        @enderror

                                                    </div>

                                                </div>
                                                <div>
                                                    <label for="new_password"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Product color
                                                    </label>
                                                    <div class="relative">
                                                        <input type="text" name="product_color" value=""
                                                            class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                        @error('product_color')
                                                        <span class="text-red-600">{{$message}}</span>
                                                        @enderror

                                                    </div>

                                                </div>




                                                <div>
                                                    <label for="new_password"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Season
                                                    </label>
                                                    <div class="relative">
                                                        <input type="text" name="season" value=""
                                                            class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                        @error('season')
                                                        <span class="text-red-600">{{$message}}</span>
                                                        @enderror

                                                    </div>

                                                </div>

                                                <div>
                                                    <label for="new_password"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Product Quantity
                                                    </label>
                                                    <div class="relative">
                                                        <input type="number" name="quantity" value=""
                                                            class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                        @error('quantity')
                                                        <span class="text-red-600">{{$message}}</span>
                                                        @enderror

                                                    </div>

                                                </div>
                                                <div>
                                                    <label for="new_password"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Product Size
                                                    </label>
                                                    <div class="relative">
                                                        <input type="text" name="product_size" value=""
                                                            class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                        @error('product_size')
                                                        <span class="text-red-600">{{$message}}</span>
                                                        @enderror

                                                    </div>

                                                </div>


                                                <div>
                                                    <label for="new_password"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Discount %
                                                    </label>
                                                    <div class="relative">
                                                        <input type="number" name="discount" value=""
                                                            class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                        @error('quantity')
                                                        <span class="text-red-600">{{$message}}</span>
                                                        @enderror

                                                    </div>

                                                </div>

                                                <!-- <div>
                                                    <label for="new_password"
                                                        class="block mb-2 ml-1 text-xs font-semibold ">Product image url
                                                    </label>
                                                    <div class="relative">
                                                        <input type="text" name="product_img" value=""
                                                            class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                        @error('product_img')
                                                        <span class="text-red-600">{{$message}}</span>
                                                        @enderror

                                                    </div>

                                                </div> -->

                                                <div>
                                <label for="new_password" class="block mb-2 ml-1 text-xs font-semibold ">Photo
                                </label>
                                <div class="relative">
                                    
                                    <input type="file" name="product_img"  id="image" 
                                        class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        >
                                        @error('product_img')
                                            <span class="text-red-600">{{$message}}</span>
                                        @enderror
                                       
                                </div>

                            </div>
                            
			<div class="row mb-3">
				
				<div class="col-sm-12 text-secondary">
					 <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
				</div>
			</div>
                            
                            


                                                <button type="submit"
                                                    class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-red-600 border border-transparent rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                                                    Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </main>


                    </section>






                </div>

























            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>


@endsection

