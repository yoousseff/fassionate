@extends('frontend.master')
@section('main')


<div class="flex flex-col items-center justify-center">
    <p class=" text-5xl my-5">NEW ARRIVALS</p>
    <hr class="mb-5 w-[75%] border-gray-200  " />
</div>


<div class=" flex justify-center ">


@if (count($products)>0)


  
    <div class="flex  justify-start gap-10 flex-wrap w-[90%]">

        <!-- sort -->


        @include('userPages.sort')

        <!-- Cards -->


        <div class="flex justify-center flex-wrap gap-10">



            @foreach ($products as $product )

            

            <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src='{{$product->product_img}}' alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            {{$product->product_name}}
                        </p>
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            @if ($product->sale == 1)
                            EGP{{number_format(($product->product_price - ($product->product_price * $product->discount )/100),2) }} 
                        <br>
                            
                        <s>EGP{{$product->product_price}}</s>
                        <br>
                        <span class="text-red-600">{{$product->discount }}% OFF</span>
                            @else
                            EGP{{$product->product_price}}
                        @endif
                        </p>
                    </div>
                    <p class="block text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                        {{$product->product_description}}
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                        class="align-middle select-none mb-3 bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Add to Cart
                    </button>
                    <button
                        class="align-middle select-none bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Add to Wishlist
                    </button>
                </div>

            </div>

            @endforeach


        </div>
    </div>
    
    @else
    <div class="bg-gray-200 rounded-lg shadow-md m-10 p-10">

        <p class="text-5xl ">No New arrivals available</p>
        <p class="mt-1 text-red-500">Coming Soon</p>
    </div>

@endif


</div>

@endsection