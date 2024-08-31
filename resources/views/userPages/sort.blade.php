
<div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="focus:shadow-outline mt-2 flex w-full flex-row items-center rounded-lg bg-transparent  text-left  px-4 py-2 text-sm font-semibold hover:text-red-600 focus:text-red-600  md:mt-0  md:ml-4 md:inline md:w-auto">
                <span class="text-xl">Sort &#38; Filter</span>
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
                class=" right-0 mt-2 w-full origin-top-right px-3   rounded-md shadow-lg  md:w-48">

                <div class="flex flex-col ">

                    <p class="text-md">Price</p>
                    <a href="#" class="text-xs hover:underline mt-3">Low to High</a>
                    <a href="#" class="text-xs hover:underline mt-3">High to Low</a>
                    <p class="text-md mt-5">Color</p>

                    <div class="flex items-center mt-3 mb-3">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded ">
                        <label for="default-checkbox" class="ms-2 text-xs  text-gray-900 ">Red</label>
                    </div>
                    <div class="flex items-center mb-3">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded ">
                        <label for="checked-checkbox" class="ms-2 text-xs  text-gray-900 ">Yellow</label>
                    </div>
                    <div class="flex items-center mb-3">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded ">
                        <label for="checked-checkbox" class="ms-2 text-xs  text-gray-900 ">Blue</label>
                    </div>
                    <div class="flex items-center mb-3">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded ">
                        <label for="checked-checkbox" class="ms-2 text-xs  text-gray-900 ">White</label>
                    </div>
                    <div class="flex items-center mb-3">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded ">
                        <label for="checked-checkbox" class="ms-2 text-xs  text-gray-900 ">Green</label>
                    </div>
                    <div class="flex items-center mb-3">
                        <input id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded ">
                        <label for="checked-checkbox" class="ms-2 text-xs  text-gray-900 ">Gray</label>
                    </div>



                </div>




            </div>
        </div>
