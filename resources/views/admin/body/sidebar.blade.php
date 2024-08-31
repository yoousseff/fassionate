@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
			<div>
					<img src="{{ asset('adminbackend/assets/images/logo-img.png') }}" class="w-40" alt="logo icon">
				</div>
			
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">

					<li>
					<a href="{{ route('adminDashboard') }}">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>


				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Brand</div>
					</a>
					<ul>
					<li> <a href="{{ route('all.brand') }}"><i class="bx bx-right-arrow-alt"></i>All Brands</a></li>
						
					<li> <a href="{{ route('add.brand') }}"><i class="bx bx-right-arrow-alt"></i>Add Brand </a>
					</ul>
				</li>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Products</div>
					</a>
					<ul>
					<li> <a href="{{ route('all.product') }}"><i class="bx bx-right-arrow-alt"></i>All Products</a></li>
						
					<li> <a href="{{ route('add.product') }}"><i class="bx bx-right-arrow-alt"></i>Add Products </a>
					</ul>
				</li>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>