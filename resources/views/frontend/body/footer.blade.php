
<div>

    <footer class="bg-black mt-5">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/"
                    class="focus:shadow-outline rounded-lg text-lg font-semibold uppercase tracking-widest text-black focus:outline-none"><img
                    src="{{asset('assets/logo/logo_white.webp')}}" alt="Logo" class="w-36 md:w-52"></a>
                    <h3 class="text-white mt-5 sm:hidden lg:block ">Elevate your wardrobe. <br>
                    Discover endless possibilities.</h3>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-300 uppercase">CATEGORIES </h2>
                        <ul class="text-gray-500 font-medium ">
                            <li class="mb-4">
                          <a href="{{Route('menPage')}}" class="hover:underline">Men</a>
                      </li>
                      <li class="mb-4">
                          <a href="{{Route('womenPage')}}" class="hover:underline">Women</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{Route('jewellsPage')}}" class="hover:underline">Jewells</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{Route('salePage')}}" class="hover:underline">Sale</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{Route('newArrivalsPage')}}" class="hover:underline">New Arrivals</a>
                        </li>
                        <li >
                            <a href="{{Route('bestSellersPage')}}" class="hover:underline">Best Sellers</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-300 uppercase">Follow us on</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Facebook</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Instagram</a>
                        </li>
                        
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-300 uppercase">For collaboration contact us at</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">fassionateEgy@gmail.com</a>
                        </li>
                        
                    </ul>
              </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <div class=" flex justify-center">
            <span class="text-sm text-gray-500 sm:text-center">© {{date('Y')}} <a href="/" class="hover:underline">Fassionate™</a>. All Rights Reserved.
        </span>
        
    </div>
</div>
</footer>

</div>