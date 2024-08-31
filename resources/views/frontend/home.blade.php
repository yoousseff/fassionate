@extends('frontend.master')
@section('main')



<div class="relative  mx-auto md:rounded-md shadow-2xl select-none cursor-pointer max-w-[980px]  md:mt-10 mb-10">
    <a href="{{ seasons()['url'] }}">
        <img class=" w-full object-cover md:rounded-md" src="{{ seasons()['image'] }}" alt="image">
        <div class="absolute inset-0 bg-black opacity-30 md:rounded-md"></div>
        <div class="absolute inset-0 flex flex-col gap-4 items-center justify-center md:rounded-md">
            <h2 class="text-white text-3xl md:text-7xl ">Get Lost in {{seasons()['season']}}</h2>
            <h2 class="text-white text-3xl md:text-6xl ">Collection</h2>
        </div>
    </a>

</div>






<!-- men -->
 @include('userPages.cards.mencard' ,["products" => $products])


<!-- women -->
@include('userPages.cards.womencard')



<!-- jewells -->

@include('userPages.cards.jewellscard')


<!-- new arrivals -->
@include('userPages.cards.newarrivalscard')



<!-- Best Sellers -->

@include('userPages.cards.bestsellercard')



@endsection