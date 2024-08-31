@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">All Products</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{Route('adminDashboard')}}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Products</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
                        <a href="{{ route('add.product') }}" class="btn btn-primary">Add Products</a> 				 
							 
							 
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				 
				
				<div class="card ">
					<div class="card-body ">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-dark rounded-sm table-bordered" style="width:100%">
								<thead>
			<tr>
				<th>ID</th>
				<th>Product Name </th>
				<th>Product Price </th>
				<th>Sale</th>
				<th>New arrivals</th>
				<th>Best Sellers</th>
				<th>Gender</th>
				<th>Description</th>
				<th>Category</th>
				<th>Product Image </th>
				<th>Product Color</th>
				<th>Season </th>
				<th>Quantity</th>
				<th>Size</th>
				<th>Discount</th>
				<th>Action</th> 
			</tr>
		</thead>
		<tbody>
	@foreach($products as $key => $item)		
			<tr>
				<td>{{ $key+1 }} </td>
				<td>{{ $item->product_name }}</td>
				<td>{{ $item->product_price }}</td>
				<td>{{ $item->sale }}</td>
				<td>{{ $item->new_arrival }}</td>
				<td>{{ $item->best_seller}}</td>
				<td>{{ $item->gender}}</td>
				<td>{{ $item->product_description}}</td>
				<td>{{ $item->product_category}}</td>
				<td> <img src="{{ asset($item->product_img) }}" style="width: 70px; height:40px;" >  </td>
				<td>{{ $item->product_color}}</td>
				<td>{{ $item->season}}</td>
				<td>{{ $item->quantity}}</td>
				<td>{{ $item->product_size}}</td>
				<td>{{ $item->discount}}</td>
				
				<td>
                <a href="{{ route('edit.product',$item->id) }}" class="btn btn-primary">Edit</a>
				<a href="{{ route('delete.product',$item->id) }}" class="btn btn-danger" id="delete" >Delete</a>

				</td> 
			</tr>
			@endforeach
			 
		 
		</tbody>
		<tfoot>
		<tr>
				<th>ID</th>
				<th>Product Name </th>
				<th>Product Price </th>
				<th>Sale</th>
				<th>New arrivals</th>
				<th>Best Sellers</th>
				<th>Gender</th>
				<th>Description</th>
				<th>Category</th>
				<th>Product Image </th>
				<th>Product Color</th>
				<th>Season </th>
				<th>Quantity</th>
				<th>Size</th>
				<th>Discount</th>
				<th>Action</th> 
			</tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>
 

				 
			</div>




@endsection