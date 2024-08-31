<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fassionate | Register</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  @vite('resources/css/app.css')
</head>
<body>


<div class="">
      <div class="flex  ">
        <div class="order-2 hidden md:block h-screen min-h-full">
          <img src="{{asset('assets/forms/register.webp')}}" class="w-full h-full object-cover" alt="login-image" />
        </div>

        <form class="max-w-xl w-full p-6 mx-auto" method="POST" action="{{ route('register') }}">
        @csrf
          <div class="mb-12">
            <h3 class="text-gray-800 text-4xl font-extrabold text-center md:text-start ">Create new account</h3>
            <p class="text-gray-800 text-sm mt-6">You have an account already ?<a href="{{Route('login')}}" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Login here</a></p>
          </div>


              
              <div >
                  <label class="text-gray-800 text-sm block mb-2" for="first_name">Name</label>

                  <div class="flex flex-col">

                      <div class="relative flex items-center">
                          <input id="name"  type="text" name="name" required autofocus autocomplete="name" class="w-full text-sm text-gray-800 border-b border-gray-300 focus:border-blue-600 px-2 py-3 outline-none" placeholder="Enter your name" />
                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                          
                        </div>
                    </div>
                </div>
                
              
              
     

          <div class="mt-4">
            <label class="text-gray-800 text-sm block mb-2">Email</label>
            <div class="flex flex-col">
                <div class="relative flex items-center">
                    <input  id="email" name="email" type="text" required class="w-full text-sm text-gray-800 border-b border-gray-300 focus:border-blue-600 px-2 py-3 outline-none" placeholder="Enter email" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
          </div>

          <div class="mt-4">
            <label class="text-gray-800 text-sm block mb-2" for="phone">Mobile Number</label>
            <div class="relative flex items-center">
              <input name="phone" id="phone" type="text" required class="w-full text-sm text-gray-800 border-b border-gray-300 focus:border-blue-600 px-2 py-3 outline-none" placeholder="Enter mobile number" />
            </div>
          </div>

          <div class="mt-4">

            <label class="text-gray-800 text-sm block mb-2" for="password">Password</label>
            <div class="flex flex-col">

                <div class="relative flex items-center" x-data="{ show: false }">
                    <input name="password"  id="password" type="password" x-bind:type="show ? 'text' : 'password'"   required class="w-full text-sm text-gray-800 border-b border-gray-300 focus:border-blue-600 px-2 py-3 outline-none" placeholder="Enter password" />
                    <svg @click="show = !show" xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                        <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                    </svg>
                </div>
                

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />



            </div>
          </div>
          <div class="mt-4">
            <label class="text-gray-800 text-sm block mb-2" for="password confirmation">Confirm Password</label>
            <div class="flex flex-col">

                <div class="relative flex items-center" x-data="{ show: false }">
                    <input name="password_confirmation" id="password_confirmation" type="password" x-bind:type="show ? 'text' : 'password'"   required class="w-full text-sm text-gray-800 border-b border-gray-300 focus:border-blue-600 px-2 py-3 outline-none" placeholder="Confirm password" />
                    <svg @click="show = !show" xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                        <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                    </svg>
                   
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            </div>
        </div>

          <div class="flex flex-wrap items-center justify-between gap-4 mt-6">
            
          
          </div>

          <div class="mt-5 flex md:flex-row flex-col justify-center gap-10">

          <div class="basis-1/2">
            <button type="submit" class="w-full py-2.5 px-4 text-sm tracking-wide rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
              Sign Up
            </button>
          </div>
                <div class="order-last md:order-none  flex justify-center items-center">
    <a href="/">
    
    <svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" viewBox="0 0 50 50">
        <title>Go back to home page</title><path d="M 24.962891 1.0546875 A 1.0001 1.0001 0 0 0 24.384766 1.2636719 L 1.3847656 19.210938 A 1.0005659 1.0005659 0 0 0 2.6152344 20.789062 L 4 19.708984 L 4 46 A 1.0001 1.0001 0 0 0 5 47 L 18.832031 47 A 1.0001 1.0001 0 0 0 19.158203 47 L 30.832031 47 A 1.0001 1.0001 0 0 0 31.158203 47 L 45 47 A 1.0001 1.0001 0 0 0 46 46 L 46 19.708984 L 47.384766 20.789062 A 1.0005657 1.0005657 0 1 0 48.615234 19.210938 L 41 13.269531 L 41 6 L 35 6 L 35 8.5859375 L 25.615234 1.2636719 A 1.0001 1.0001 0 0 0 24.962891 1.0546875 z M 25 3.3222656 L 44 18.148438 L 44 45 L 32 45 L 32 26 L 18 26 L 18 45 L 6 45 L 6 18.148438 L 25 3.3222656 z M 37 8 L 39 8 L 39 11.708984 L 37 10.146484 L 37 8 z M 20 28 L 30 28 L 30 45 L 20 45 L 20 28 z"></path>
    </svg>
    </a>
    </div>
                
              
                <div class="basis-1/2">

                    
                    <a href="{{Route('google-auth')}}" class="w-full  flex items-center justify-center gap-4 py-2.5 px-4 text-sm tracking-wide text-gray-800 border border-gray-300 rounded-md bg-transparent hover:bg-gray-50 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="inline" viewBox="0 0 512 512">
                        <path fill="#fbbd00"
                        d="M120 256c0-25.367 6.989-49.13 19.131-69.477v-86.308H52.823C18.568 144.703 0 198.922 0 256s18.568 111.297 52.823 155.785h86.308v-86.308C126.989 305.13 120 281.367 120 256z"
                        data-original="#fbbd00" />
                        <path fill="#0f9d58"
                        d="m256 392-60 60 60 60c57.079 0 111.297-18.568 155.785-52.823v-86.216h-86.216C305.044 385.147 281.181 392 256 392z"
                        data-original="#0f9d58" />
                        <path fill="#31aa52"
                        d="m139.131 325.477-86.308 86.308a260.085 260.085 0 0 0 22.158 25.235C123.333 485.371 187.62 512 256 512V392c-49.624 0-93.117-26.72-116.869-66.523z"
                        data-original="#31aa52" />
                        <path fill="#3c79e6"
                        d="M512 256a258.24 258.24 0 0 0-4.192-46.377l-2.251-12.299H256v120h121.452a135.385 135.385 0 0 1-51.884 55.638l86.216 86.216a260.085 260.085 0 0 0 25.235-22.158C485.371 388.667 512 324.38 512 256z"
                        data-original="#3c79e6" />
                        <path fill="#cf2d48"
                        d="m352.167 159.833 10.606 10.606 84.853-84.852-10.606-10.606C388.668 26.629 324.381 0 256 0l-60 60 60 60c36.326 0 70.479 14.146 96.167 39.833z"
                        data-original="#cf2d48" />
                        <path fill="#eb4132"
                        d="M256 120V0C187.62 0 123.333 26.629 74.98 74.98a259.849 259.849 0 0 0-22.158 25.235l86.308 86.308C162.883 146.72 206.376 120 256 120z"
                        data-original="#eb4132" />
                    </svg>
                    Continue with google
</a>
            </div>
            </div>
        </form>
      </div>
    </div>


</div>

</body>
</html>