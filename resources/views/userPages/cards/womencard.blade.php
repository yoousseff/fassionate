<div x-data="{ expanded: false }"  
        class="flex flex-col justify-center mb-10 items-center">




    <div
     @click.away="expanded = false" class="relative  mx-auto rounded-md shadow-2xl select-none cursor-pointer w-[90%] md:w-[50%]    "
        @click="expanded = !expanded">
        <img class=" w-full h-40 object-cover rounded-md" src="{{asset('assets/homeCards/women.jpg')}}" alt="image">
        <div class="absolute inset-0 bg-black opacity-30 rounded-md"></div>
        <div class="absolute inset-0 flex flex-col gap-4 items-center justify-center rounded-md">
            <h2 class="text-white text-3xl  ">WOMEN</h2>
        </div>

    </div>





    <div x-show="expanded" 
    x-transition:enter="transition ease-in duration-500"
        x-transition:enter-start="transform scale-95"
        x-transition:enter-end="transform scale-100"
        x-transition:leave="transition ease-out duration-500"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
    
    class=" top-full left-0 w-full mt-5">
        <div class="flex flex-col duratio md:flex-row justify-center items-center gap-10">





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
                EGP{{$product->product_price}}

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
        <div class="flex justify-center items-center mt-5">

        <a href="{{Route('womenPage')}}"
                class="border-none  bg-black text-white px-6 py-2 hover:translate-x-1 hover:translate-y-1 hover:text-red-600 ease-in-out duration-75 ">View
                more</a>
        </div>
    </div>
</div>