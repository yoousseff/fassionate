@extends('admin.admin_dashboard')
@section('admin')



<div class="page-content"> 

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Admin User Profile</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{Route('adminDashboard')}}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Change Password</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
				 
					</div>
				</div>
<section>
    <main id="content" role="main" class="w-full  max-w-md  mx-auto">
        <div class="bg-white border shadow-lg  rounded-xl">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <div class="flex items-center justify-center mb-8 text-2xl font-bold">
                        <img src="{{asset('adminbackend/assets/images/logo-img.png')}}" class="w-52" alt="">

                    </div>
                    <h1 class="block text-lg font-bold text-gray-800">Change Password</h1>
                </div>

                <div class="mt-5">
                    <form method="POST" action="{{Route('adminUpdatePassword')}}">
                        @csrf
                        <div class="grid gap-y-4">
                            <div>
                                <label for="new_password" class="block mb-2 ml-1 text-xs font-semibold ">Old Password
                                </label>
                                <div class="relative">
                                    <input type="password" id="old_password" name="old_password"
                                        class="block w-full px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500
                                        @error('old_password') is-invalid @enderror"
                                        required placeholder="Enter the old password">
                                        @error('old_password')
                                            <span class="text-red-600">{{$message}}</span>
                                        @enderror
                                </div>

                            </div>
                            <div>
                                <label for="new_password" class="block mb-2 ml-1 text-xs font-semibold ">New
                                    password</label>
                                <div class="relative">
                                    <input type="password" id="new_password" name="new_password"
                                        class="block w-full px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500
                                        @error('new_password') is-invalid @enderror"
                                        required placeholder="Enter a new password">
                                        @error('new_password')
                                            <span class="text-red-600">{{$message}}</span>
                                        @enderror
                                </div>

                            </div>
                            <div>
                                <label for="confirmn_new_password"
                                    class="block mb-2 ml-1 text-xs font-semibold ">Confirm new password</label>
                                <div class="relative">
                                    <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                                        class="block w-full px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        required placeholder="Confirm the new password">
                                </div>

                            </div>
                            <button type="submit"
                                class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-red-600 border border-transparent rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update
                                my password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


</section>
</div>

@endsection