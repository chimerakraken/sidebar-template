<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/base.css') }}" rel="stylesheet">
  <link href="{{ asset('css/layer.css') }}" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="{{asset('img/ndmu-seal-small.png')}}" />
  <title>Notre Dame of Marbel University | SATP</title>
</head>
<body class="antialiased" >
  <main x-data="{sideBar: false}" class="max-h-full">
    <div class="">
      <div class="flex-1 h-screen transition-all ease-in-out">
        <div class="flex font-sans shadow py-3 pl-5 bg-white fixed w-full z-20">
          <img src="{{asset('img/ndmu-seal-small.png')}}" class=" w-9 h-9" alt="">
          <p class="  font-medium text-lime-700 text-2xl tracking-wide ml-3">
            SATP
          </p>
          {{-- <svg  class="w-5 h-5 inline mt-1.5 ml-1.5 fill-current text-lime-500 rounded-full ring-1 ring-lime-100 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> --}}
          <div class="relative w-full -mt-1  mx-0 h-10">
            <div class="absolute right-7">
              <div x-data="{open:false}" class="flex cursor-pointer" x-id="profilebtn"  @click="open === true ? open=false : open=true" @click.away="open = false">
                <img  src="https://images.unsplash.com/photo-1617791636474-cad64fefa7f7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=692&q=80" class=" w-9 h-9 mt-1  rounded-full ring ring-lime-100 ml-2" alt="">
                <div x-show="$component('profilebtn').open" class=" z-10 origin-top-right absolute right-7 mt-14 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                  <div class="relative flex justify-end px-3">
                    <div class="bg-lime-200 absolute w-3 h-3 transform rotate-45 -mt-1 "></div>
                  </div>
                  <div class="py-1 pt-3 pb-3 pl-4 bg-gradient-to-r from-lime-300 to-lime-200 rounded-t-sm" role="none">
                    <div class=" text-sm text-lime-700 align-bottom">Signed in as:</div>
                    <div class=" text-sm font-medium text-lime-700">chimerakraken</div>
                  </div> 
                  <div class="py-1" role="none">
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-4">Your Teachers</a>
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-4">Your Profile</a>
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-5">Your Rates</a>
                  </div>
                  <div class="py-1" role="none">
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-6">Sign out</a>
                  </div>
                </div>
                <svg class="w-3 h-3 mt-4 mx-2.5 stroke-current text-lime-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </div>
            </div>
          </div>
        </div>  
        <div>
          @yield('content')
        </div>
      </div>
    </div>
  </main> 
</body>
</html>
<script src="{{ asset('plugin/moment.js') }}" ></script>
<script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@1.2.x/dist/index.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script> --}}