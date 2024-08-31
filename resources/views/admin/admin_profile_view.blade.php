@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 







				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Admin User Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{Route('adminDashboard')}}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
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
							<div class="col-lg-4">
								<div class="card rounded-xl">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
 	<img src="{{ (!empty($adminData->photo)) ? url('upload/admin_images/'.$adminData->photo):url('upload/no_image.jpg')    }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
					<div class="mt-3">
						<h4>{{ $adminData->name }}</h4>
						<p class="text-secondary mb-1">{{ $adminData->email }}</p>
						<p class="text-muted font-size-sm">{{ $adminData->address }}</p>
					 
					</div>
										</div>
									
									</div>
								</div>
							</div>

<div class="col-lg-8">
<section>
    <main id="content" role="main" class="w-full  mx-auto">
        <div class="bg-white  shadow-lg  rounded-xl">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <div class="flex items-center justify-center mb-8 text-2xl font-bold">
                        <img src="{{asset('adminbackend/assets/images/logo-img.png')}}" class="w-52" alt="">

                    </div>
                    <h1 class="block text-lg font-bold text-gray-800">Update your data</h1>
                </div>

                <div class="mt-5">
                    <form method="POST" action="{{Route('adminProfileStore')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-y-4">
                            <div>
                                <label for="Email" class="block mb-2 ml-1 text-xs font-semibold ">Email
                                </label>
                                <div class="relative">
                                    <input type="text" name="email"  value="{{ $adminData->email }}" disabled 
                                        class="block w-full bg-gray-200 px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        >
                                       
                                </div>

                            </div>
                            <div>
                                <label for="Name" class="block mb-2 ml-1 text-xs font-semibold ">Name
                                </label>
                                <div class="relative">
                                    <input type="text" name="name"  value="{{ $adminData->name }}"
                                        class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        >
                                       
                                </div>

                            </div>
                            <div>
                                <label for="Phone" class="block mb-2 ml-1 text-xs font-semibold ">Phone
                                </label>
                                <div class="relative">
                                    <input type="text" name="phone"  value="{{ $adminData->phone }}" 
                                        class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        >
                                       
                                </div>

                            </div>
                            <div>
                                <label for="Address" class="block mb-2 ml-1 text-xs font-semibold ">Address
                                </label>
                                <div class="relative">
                                    <input type="text" name="address"  value="{{ $adminData->address }}" 
                                        class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        >
                                       
                                </div>

                            </div>
                            <div>
                                <label for="Photo" class="block mb-2 ml-1 text-xs font-semibold ">Photo
                                </label>
                                <div class="relative">
                                    
                                    <input type="file" name="photo" id="image" 
                                        class="block w-full  px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        >
                                       
                                </div>

                            </div>
                            
			<div class="row mb-3">
				
				<div class="col-sm-12 text-secondary">
					 <img id="showImage" src="{{ (!empty($adminData->photo)) ? url('upload/admin_images/'.$adminData->photo):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
				</div>
			</div>
                            
                            
                            <button type="submit"
                                class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-red-600 border border-transparent rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update
                                my Information</button>
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