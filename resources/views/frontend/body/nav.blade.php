<div>

    <div class="w-full bg-black text-white flex justify-end shadow-md">
        
        <div class="mx-5 gap-3 my-1 flex  justify-center items-center">
@if (Auth::check())
    





        

            <div @click.outside="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="focus:shadow-outline mt-2 flex w-full flex-row items-center rounded-lg bg-transparent  text-left  px-4 py-2 text-sm font-semibold hover:text-red-600 focus:text-red-600  md:mt-0  md:ml-4 md:inline md:w-auto">
                    <span>{{Auth::user()->name}}</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="mt-1 ml-1 inline h-4 w-4 transform transition-transform duration-200 md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 mt-2 w-48 origin-top-right rounded-md z-50 shadow-lg ">
                    <div class="rounded-sm bg-black   px-2 py-2 shadow">

                        <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-white hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                            href="#">My orders</a>

                        <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-white hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                            href="{{Route('profile.edit')}}">Edit Account Details</a>

                        <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-white hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                            href="#">My Wish list</a>


                        <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-white hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>



                    </div>
                </div>



            </div>







            @else

            <div class="text-white me-3 ">

                <a href="{{Route('login')}}" class="flex">
                    <svg viewBox="0 0 24 24" class="w-7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M14 4L17.5 4C20.5577 4 20.5 8 20.5 12C20.5 16 20.5577 20 17.5 20H14M15 12L3 12M15 12L11 16M15 12L11 8"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                    <p>Login</p>
                </a>

            </div>

            @endif

            <div class="text-white  ">
                <a href="{{Route('wishListPage')}}"><svg viewBox="0 0 24 24" class="w-7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M8.96173 18.9109L9.42605 18.3219L8.96173 18.9109ZM12 5.50063L11.4596 6.02073C11.601 6.16763 11.7961 6.25063 12 6.25063C12.2039 6.25063 12.399 6.16763 12.5404 6.02073L12 5.50063ZM15.0383 18.9109L15.5026 19.4999L15.0383 18.9109ZM9.42605 18.3219C7.91039 17.1271 6.25307 15.9603 4.93829 14.4798C3.64922 13.0282 2.75 11.3345 2.75 9.1371H1.25C1.25 11.8026 2.3605 13.8361 3.81672 15.4758C5.24723 17.0866 7.07077 18.3752 8.49742 19.4999L9.42605 18.3219ZM2.75 9.1371C2.75 6.98623 3.96537 5.18252 5.62436 4.42419C7.23607 3.68748 9.40166 3.88258 11.4596 6.02073L12.5404 4.98053C10.0985 2.44352 7.26409 2.02539 5.00076 3.05996C2.78471 4.07292 1.25 6.42503 1.25 9.1371H2.75ZM8.49742 19.4999C9.00965 19.9037 9.55954 20.3343 10.1168 20.6599C10.6739 20.9854 11.3096 21.25 12 21.25V19.75C11.6904 19.75 11.3261 19.6293 10.8736 19.3648C10.4213 19.1005 9.95208 18.7366 9.42605 18.3219L8.49742 19.4999ZM15.5026 19.4999C16.9292 18.3752 18.7528 17.0866 20.1833 15.4758C21.6395 13.8361 22.75 11.8026 22.75 9.1371H21.25C21.25 11.3345 20.3508 13.0282 19.0617 14.4798C17.7469 15.9603 16.0896 17.1271 14.574 18.3219L15.5026 19.4999ZM22.75 9.1371C22.75 6.42503 21.2153 4.07292 18.9992 3.05996C16.7359 2.02539 13.9015 2.44352 11.4596 4.98053L12.5404 6.02073C14.5983 3.88258 16.7639 3.68748 18.3756 4.42419C20.0346 5.18252 21.25 6.98623 21.25 9.1371H22.75ZM14.574 18.3219C14.0479 18.7366 13.5787 19.1005 13.1264 19.3648C12.6739 19.6293 12.3096 19.75 12 19.75V21.25C12.6904 21.25 13.3261 20.9854 13.8832 20.6599C14.4405 20.3343 14.9903 19.9037 15.5026 19.4999L14.574 18.3219Z"
                                fill="#ffffff"></path>
                        </g>
                    </svg></a>


                <div
                    class="absolute  border rounded-full border-white bg-red-600 top-[16px] right-[78px] w-4 h-4 flex justify-center items-center">
                    <span class="text-white text-center text-[10px] ">0</span>
                </div>
            </div>
            <div class="text-white  ">
                <a href="{{Route('buyBagPage')}}"><svg fill="#ffffff" class="w-7" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 483.1 483.1" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path
                                    d="M434.55,418.7l-27.8-313.3c-0.5-6.2-5.7-10.9-12-10.9h-58.6c-0.1-52.1-42.5-94.5-94.6-94.5s-94.5,42.4-94.6,94.5h-58.6 c-6.2,0-11.4,4.7-12,10.9l-27.8,313.3c0,0.4,0,0.7,0,1.1c0,34.9,32.1,63.3,71.5,63.3h243c39.4,0,71.5-28.4,71.5-63.3 C434.55,419.4,434.55,419.1,434.55,418.7z M241.55,24c38.9,0,70.5,31.6,70.6,70.5h-141.2C171.05,55.6,202.65,24,241.55,24z M363.05,459h-243c-26,0-47.2-17.3-47.5-38.8l26.8-301.7h47.6v42.1c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h141.2v42.1 c0,6.6,5.4,12,12,12s12-5.4,12-12v-42.1h47.6l26.8,301.8C410.25,441.7,389.05,459,363.05,459z">
                                </path>
                            </g>
                        </g>
                    </svg></a>


                <div
                    class="absolute  border rounded-full border-white bg-red-600 top-[16px] right-[38px] w-4 h-4 flex justify-center items-center">
                    <span class="text-white text-center text-[10px] ">0</span>
                </div>
            </div>





        </div>

    </div>

    <div class="w-full bg-white text-black  md:shadow-md">


        <div x-data="{ open: false }"
            class=" flex  flex-col px-4 md:flex-row md:items-center md:justify-between md:px-6 lg:px-8">



            <div class="flex flex-row items-center justify-between p-4">
                <a href="/"
                    class="focus:shadow-outline rounded-lg text-lg font-semibold uppercase tracking-widest text-black focus:outline-none"><img
                        src="{{asset('assets/logo/logo.webp')}}" alt="Logo" class="w-36 md:w-52"></a>





                <!-- burger icon start -->
                <button class="focus:shadow-outline rounded-lg focus:outline-none md:hidden" x-on:click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- burger icon end -->
            </div>

            <nav :class="{'flex': open, 'hidden': !open}"
                class=" flex-grow flex-col pb-4 md:flex md:flex-row md:justify-end md:pb-0 ">

                <!-- search -->

                <div x-data="{ showSearch: false }" class="relative flex ">
                    <button @click="showSearch = !showSearch" class="p-2">

                        <!-- search icon -->
                        <svg x-transition:enter="transition hidden ease-in duration-300 "
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-out duration-300 "
                            x-transition:leave-start="opacity-100 " x-transition:leave-end="opacity-0"
                            xmlns="http://www.w3.org/2000/svg" x-show="!showSearch" width="20" height="20"
                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>


                        <!-- close icon -->
                        <svg x-transition:enter="transition hidden ease-in duration-300 "
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-out duration-300 "
                            x-transition:leave-start="opacity-100 " x-transition:leave-end="opacity-0"
                            xmlns="http://www.w3.org/2000/svg" x-show="showSearch" width="20" height="20"
                            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>

                    </button>
                    <form id="search-form" action="{{ route('search') }}" method="GET">

                    <input type="text" name="query" id="search-input" placeholder="Search"
                        class="border border-black placeholder:text-black h-9 p-2 w-full " x-show="showSearch"
                        x-transition:enter="transition ease-in duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-y-[-10%]"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300 transform"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-[-10%]" />
                        </form>
                        <div id="search-results"></div>
                        <div id="debug-info"></div>
                </div>

                <!-- end search -->



                <div @click.outside="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="focus:shadow-outline mt-2 flex w-full flex-row items-center rounded-lg bg-transparenttext-left px-4 md:px-0 py-2 text-sm font-semibold hover:text-red-600 focus:text-red-600  md:mt-0  md:ml-4 md:inline md:w-auto">
                        <span>Men</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="mt-1 ml-1 inline h-4 w-4 transform transition-transform duration-200 md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-full origin-top-right rounded-md z-50 shadow-lg md:w-48">
                        <div class="rounded-sm bg-white  px-2 py-2 shadow">
                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('menPage')}}">All</a>

                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('menPantsPage')}}">Pants</a>

                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('menTshirtsPage')}}">T-shirts</a>

                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('menShirtsPage')}}">Shirts</a>

                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('menHomeWearPage')}}">Home Wear</a>

                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('menBagsPage')}}">Bags</a>






                        </div>
                    </div>



                </div>


                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="focus:shadow-outline  flex w-full flex-row items-center rounded-lg bg-transparent  text-left  px-4 py-2 text-sm font-semibold hover:text-red-600 focus:text-red-600  md:mt-0  md:ml-4 md:inline md:w-auto">
                        <span>Women</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="mt-1 ml-1 inline h-4 w-4 transform transition-transform duration-200 md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-full origin-top-right z-50 rounded-md shadow-lg  md:w-48">
                        <div class="rounded-sm bg-white px-2  py-2 shadow">
                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('womenPage')}}">All</a>
                                
                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('womenPantsPage')}}">Pants</a>

                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('womenTshirtsPage')}}">T-shirts</a>

                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('womenShirtsPage')}}">Shirts</a>

                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('womenHomeWearPage')}}">Home Wear</a>

                            <a class="focus:shadow-outline mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-black hover:bg-gray-200 hover:text-red-600 focus:text-red-600 focus:outline-none md:mt-0"
                                href="{{Route('womenBagsPage')}}">Bags</a>





                        </div>
                    </div>
                </div>


                <a class="px-4 py-2 text-sm font-semibold hover:text-red-600 focus:text-red-600  md:mt-0"
                    href="{{Route('jewellsPage')}}">Jewells</a>
                <a class="px-4 py-2 text-sm font-semibold hover:text-red-600 focus:text-red-600  md:mt-0"
                    href="{{Route('salePage')}}">Sale</a>
            </nav>



        </div>




    </div>