@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add Brand </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{Route('adminDashboard')}}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Brand </li>
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
                        <img src="{{asset('adminbackend/assets/images/logo-img.png')}}" class="w-52" alt="">

                    </div>
                    <h1 class="block text-lg font-bold text-gray-800">Add brand</h1>
                </div>

                <div class="mt-5">
                <form method="post" action="{{ route('store.brand') }}" enctype="multipart/form-data" >
                @csrf
                        <div class="grid gap-y-4">
                        
                            <div>
                                <label for="new_password" class="block mb-2 ml-1 text-xs font-semibold ">Brand Name
                                </label>
                                <div class="relative">
                                    <input type="text" name="brand_name"  value=""
                                        class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        >
                                        @error('brand_name')
                                            <span class="text-red-600">{{$message}}</span>
                                        @enderror
                                       
                                </div>

                            </div>


                   
                           
                          
                            <div>
                                <label for="new_password" class="block mb-2 ml-1 text-xs font-semibold ">Photo
                                </label>
                                <div class="relative">
                                    
                                    <input type="file" name="brand_image"  id="image" 
                                        class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        >
                                        @error('brand_image')
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
                                class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-red-600 border border-transparent rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add brand</button>
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