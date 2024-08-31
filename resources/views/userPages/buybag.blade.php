@extends('frontend.master')
@section('main')










<div class="flex flex-col items-center justify-center">
    <p class=" text-5xl my-5">YOUR BAG</p>
    <hr class="mb-5 w-[75%] border-gray-200  " />
    <button class="bg-lime-500 p-5 mb-5 text-white rounded-lg  hover:rounded-xl hover:bg-lime-600 hover:text-lg ease-out duration-500 " >Check Out</button>
</div>







<div class=" flex justify-center ">



    <div class="flex  justify-start gap-10 flex-wrap w-[90%]">

        




<!-- Cards -->

        <div class="flex justify-center flex-wrap gap-10">




            <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{asset('assets/homeCards/men.jpg')}}" alt="card-image"
                        class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            Apple AirPods
                        </p>
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            $95.00
                        </p>
                    </div>
                    <p class="block text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                        With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                        class="align-middle select-none mb-3 bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        remove from the bag
                    </button>
                    <button
                        class="align-middle select-none bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Add to Wish list
                    </button>
                </div>
            </div>




            <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{asset('assets/homeCards/men.jpg')}}" alt="card-image"
                        class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            Apple AirPods
                        </p>
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            $95.00
                        </p>
                    </div>
                    <p class="block text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                        With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                        class="align-middle select-none mb-3 bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        remove from the bag
                    </button>
                    <button
                        class="align-middle select-none bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Add to Wish list
                    </button>
                </div>
            </div>



            <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{asset('assets/homeCards/men.jpg')}}" alt="card-image"
                        class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            Apple AirPods
                        </p>
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            $95.00
                        </p>
                    </div>
                    <p class="block text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                        With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                        class="align-middle select-none mb-3 bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        remove from the bag
                    </button>
                    <button
                        class="align-middle select-none bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Add to Wish list
                    </button>
                </div>
            </div>



            <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{asset('assets/homeCards/men.jpg')}}" alt="card-image"
                        class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            Apple AirPods
                        </p>
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            $95.00
                        </p>
                    </div>
                    <p class="block text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                        With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                        class="align-middle select-none mb-3 bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        remove from the bag
                    </button>
                    <button
                        class="align-middle select-none bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Add to Wish list
                    </button>
                </div>
            </div>









            <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{asset('assets/homeCards/men.jpg')}}" alt="card-image"
                        class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            Apple AirPods
                        </p>
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            $95.00
                        </p>
                    </div>
                    <p class="block text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                        With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                        class="align-middle select-none mb-3 bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        remove from the bag
                    </button>
                    <button
                        class="align-middle select-none bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Add to Wish list
                    </button>
                </div>
            </div>








            <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{asset('assets/homeCards/men.jpg')}}" alt="card-image"
                        class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            Apple AirPods
                        </p>
                        <p class="block  text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            $95.00
                        </p>
                    </div>
                    <p class="block text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                        With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                        class="align-middle select-none mb-3 bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        remove from the bag
                    </button>
                    <button
                        class="align-middle select-none bg-gray-200 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Add to Wish list
                    </button>
                </div>
            </div>
        </div>

    </div>


</div>

@endsection