<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/base.css') }}" rel="stylesheet">
  <link href="{{ asset('css/base.scss') }}" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="{{asset('img/ndmu-seal-small.png')}}" />
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@1.2.x/dist/index.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
  <title>Notre Dame of Marbel University | SATP</title>
</head>
<body class="antialiased">

<!-- Sidebar 1 -->
    <main x-data="{sideBar: $screen('lg') === true ? true : false}" class="flex flex-col h-screen min-h-screen overflow-scroll bg-gray-50">
      <div class="flex">
        <div class="h-screen absolute w-56 overflow-hidden" :class="[sideBar === false ? 'z-10' : '']" >
            <aside
                   x-show="sideBar"
                   x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
                   x-transition:enter-start="-translate-x-full"
                   x-transition:enter-end="translate-x-0"
                   x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
                   x-transition:leave-start="translate-x-0"
                   x-transition:leave-end="-translate-x-full"
                   class="absolute md:static sm:absolute h-full bg-gradient-to-b from-lime-900 to-lime-400 w-56 pl-5 text-white shadow-sm">
                   <div class="pt-4 pr-3">
                     <div class="flex">
                     <img class="pl-1 mt-1 ml-3" src="{{asset('img/ndmu-seal-small.png')}}" width="45" height="45" alt="">
                      <div class="pt-3">
                        <span class="text-2xl font-medium leading-5 text-lime-50 ml-3">SATP</span>
                      </div>
                     </div>
                  </div>
                  <nav class="text-sm subpixel-antialiased pt-14 pr-5 relative">
                    <div class="mb-3 pl-1">
                      <span class="font-medium">NAVIGATION</span>
                    </div>
                    <a href="#" tabindex="-1" class="block py-1.5 px-4 rounded transition duration-200 bg-lime-50 text-lime-700 font-medium">
                      <svg  class="w-4 h-4 inline mr-2 -mt-1 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                      Dashboard
                    </a>
                    <a href="" tabindex="-1" class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                      <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                      Students
                    </a>
                    <a href="" tabindex="-1" class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                      <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                      Teachers
                    </a>
                    <a href="" tabindex="-1" class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                      <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                      Reports
                    </a>
                    <a href="" tabindex="-1" class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                      <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                      Items
                    </a>
                    <div class="mb-3 pl-1 mt-3">
                      <span class="font-medium">SUPPORT</span>
                    </div>
                    <a href="" tabindex="-1" class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                      <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                      Settings
                    </a>
                    <a href="" tabindex="-1" class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                      <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                      Developers
                    </a>
                    <a href="" tabindex="-1" class="block py-1.5 px-4 rounded transition duration-200 hover:bg-lime-50 hover:text-lime-700 hover:font-medium">
                      <svg class="w-4 h-4 inline mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                      FAQ
                    </a>
                  </nav>
            </aside>
        </div>     
        <div class="h-screen w-16 absolute overflow-hidden" :class="[sideBar === false ? 'z-20' : '']">
            <aside 
                   x-show="sideBar === true ? false : true"
                   x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
                   x-transition:enter-start="-translate-x-full"
                   x-transition:enter-end="translate-x-0"
                   x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
                   x-transition:leave-start="translate-x-0"
                   x-transition:leave-end="-translate-x-full"
                   class="relative md:static h-full bg-gradient-to-b from-lime-900 to-lime-400 pl-2 text-white">
                <div class="pt-3 pr-4">
                  <img class="pl-1" src="{{asset('img/ndmu-seal-small.png')}}" width="55" height="55" alt="">
                  <div class="pt-7 ml-1 relative h-screen">
                    <br>
                    <div class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center bg-lime-50 bg-opacity-20">
                      <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <div class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                      <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>                    </div>
                    <div class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                      <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                      <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <div class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                      <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <div class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                      <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                      <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="px-2 mt-2 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center hover:bg-lime-50 hover:bg-opacity-20">
                      <svg class="w-8 h-8 stroke-current text-lime-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    
                  </div>
            </aside>
           <!-- <section class="flex-1 overflow-hidden transition duration-700 ease-in-out">
            </section> -->
        </div>
        <div class="flex-1 text-2xl h-screen transition-all ease-in-out" :class="[sideBar === false ? 'pl-16 duration-500 z-10' : 'pl-56 duration-500']">
          <div class="flex font-sans shadow py-3 pl-5 bg-white">
            <div @click="sideBar === false ? sideBar = true : sideBar = false" class=" px-2 cursor-pointer rounded-full w-8 h-8 hover:ml-0.5 flex items-center justify-center hover:bg-lime-300 hover:bg-opacity-20 sm-threshold"  :class="[sideBar === false ? 'bg-lime-300 bg-opacity-20 z-10 active' : '']" >
              <svg class="stroke-current w-4 h-4 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
            </div>
            <p class="tracking-tight font-medium text-lime-600 text-xl ml-3">
              Dashboard
            </p>
            <svg x-show="$screen('lg') === true ? true : false" class="w-5 h-5 inline mt-1.5 ml-1.5 fill-current text-lime-500 rounded-full ring-1 ring-lime-100 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
            <div class="relative w-full -mt-1  mx-0 h-10">
              <div class="absolute right-7 flex">
                <div x-data="{open:false}" x-id="notifbtn"  @click="open === true ? open=false : open=true" @click.away="open = false" class=" px-2 mt-1 sm:mt-0.5 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center bg-lime-100 bg-opacity-20 hover:bg-lime-200 hover:bg-opacity-20">
                  <svg class="w-8 h-8 stroke-current text-lime-600 transform rotate-12 transition ease-in-out duration-100 hover:-rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </div>
                <div x-show="$component('notifbtn').open" class="h-44 min-h-full origin-top-right absolute right-10 mt-14 w-52 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                  <div class="relative flex justify-end px-3">
                    <div class="bg-white absolute w-3 h-3 transform rotate-45 -mt-1 "></div>
                  </div>
                   <!--<div class="py-1" role="none">
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-4">Your Students</a>
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-4">Your Profile</a>
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-5">Your Rates</a> 
                  </div>-->
                  <div class="py-1" role="none">
                    <!-- <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-6">Sign out</a> -->
                  </div>
                </div>
                <img x-data="{open:false}" x-id="profilebtn"  @click="open === true ? open=false : open=true" @click.away="open = false" src="http://placekitten.com/200/300" class=" w-9 h-9 mt-1  rounded-full ring ring-lime-100 cursor-pointer ml-2" alt="">
                <div x-show="$component('profilebtn').open" class="origin-top-right absolute right-0 mt-14 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                  <div class="relative flex justify-end px-3">
                    <div class="bg-lime-200 absolute w-3 h-3 transform rotate-45 -mt-1 "></div>
                  </div>
                  <div class="py-1 pt-3 pb-3 pl-4 bg-gradient-to-r from-lime-300 to-lime-200 rounded-t-sm" role="none">
                    <div class=" text-sm text-lime-700 align-bottom">Signed in as:</div>
                    <div class=" text-sm font-medium text-lime-700">chimerakraken</div>
                  </div> 
                  <div class="py-1" role="none">
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-4">Your Students</a>
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-4">Your Profile</a>
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-5">Your Rates</a>
                  </div>
                  <div class="py-1" role="none">
                    <a href="#" class="text-lime-700 font-medium block px-4 py-2 text-sm hover:bg-lime-50" role="menuitem" tabindex="-1" id="menu-item-6">Sign out</a>
                  </div>
                </div>
              </div>
            </div>
          </div>  
          <div class="w-full p-7 pt-20">
            <div class="grid grid-cols-4 gap-5">
              <div class="lg:col-span-1 md:col-span-2 col-span-4 rounded-md shadow p-4 px-10 lg:px-8 sm:px-6 bg-white">
                <h3 class="text-lg font-medium leading-6 text-lime-600">Bar Chart</h3>
                <p class="mt-1 text-sm text-lime-900">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a. Donec bibendum.
                </p>
                <br>
                <div align="center">
                  <canvas id="barchart" class="max-h-52 max-w-md font-sans"></canvas>
                </div>
              </div>
              <div class="lg:col-span-1 md:col-span-2 col-span-4 rounded-md shadow p-4 px-10 lg:px-8 sm:px-6 bg-white">
                <h3 class="text-lg font-medium leading-6 text-lime-600">Line Chart</h3>
                <p class="mt-1 text-sm text-lime-900">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a. Donec bibendum.
                </p>
                <br>
                <div align="center">
                  <canvas id="linechart" class=" max-h-52 max-w-md font-sans"></canvas>
                </div>
              </div>
              <div class="lg:col-span-1 md:col-span-2 col-span-4 rounded-md shadow p-4 px-10 lg:px-8 sm:pb-6 bg-white">
                <h3 class="text-lg font-medium leading-6 text-lime-600">Doughnut Chart</h3>
                <p class="mt-1 text-sm text-lime-900">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a. Donec bibendum.
                </p>
                <br>
                <div align="center">
                  <canvas id="doughnutchart" class=" max-h-52 max-w-md font-sans"></canvas>
                </div>
              </div>
              <div class="lg:col-span-1 md:col-span-2 col-span-4 row-span-2 rounded-md shadow p-4 pb-3 lg:px-8 sm:px-6 bg-white">
                <h3 class="text-lg font-medium leading-6 text-lime-600">Polar Area Chart</h3>
                <p class="mt-1 text-sm text-lime-900">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a. Donec bibendum.
                </p>
                <br>
                <div align="center">
                  <canvas id="polarchart" class="max-h-52 max-w-md font-sans mb-5"></canvas>
                </div>
                <div>
                  <h3 class="text-lg mt-0 lg:mt-0 sm:mt-10 font-medium leading-6 text-lime-600">Recent Activity</h3>
                  {{-- <p class="mt-1 text-sm text-lime-900">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                  </p> --}}
                  <div class="rounded-sm h-80 mt-5 mb-3 lg:mt-5 sm:mt-3  pl-5 relative pt-3 max-h-80 overflow-y-scroll ">
                    <div class="absolute -top-0 left-0 px-2 z-10 sm:mt-0.5 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center bg-lime-100 hover:bg-lime-200 " x-bind:data-last-refresh="Date.now()">
                      <svg class="w-4 h-4 stroke-current text-lime-600 transform transition ease-in-out duration-100 hover:-rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                    </div>
                    <div class="absolute top-40 left-0 px-2 z-10 sm:mt-0.5 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center bg-lime-100 hover:bg-lime-200 " x-bind:data-last-refresh="Date.now()">
                      <svg class="w-4 h-4 stroke-current text-lime-600 transform transition ease-in-out duration-100 hover:-rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="absolute top-80 left-0 px-2 z-10 sm:mt-0.5 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center bg-lime-100 hover:bg-lime-200 " x-bind:data-last-refresh="Date.now()">
                      <svg class="w-4 h-4 stroke-current text-lime-600 transform transition ease-in-out duration-100 hover:-rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    </div>
                    <div style="top: 30rem" class="absolute left-0 px-2 z-10 sm:mt-0.5 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center bg-lime-100 hover:bg-lime-200 " x-bind:data-last-refresh="Date.now()">
                      <svg class="w-4 h-4 stroke-current text-lime-600 transform transition ease-in-out duration-100 hover:-rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <div style="top: 40rem" class="absolute left-0 px-2 z-10 sm:mt-0.5 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center bg-lime-100 hover:bg-lime-200 " x-bind:data-last-refresh="Date.now()">
                      <svg class="w-4 h-4 stroke-current text-lime-600 transform transition ease-in-out duration-100 hover:-rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </div>
                    <div style="top: 50rem" class="absolute left-0 px-2 z-10 sm:mt-0.5 cursor-pointer rounded-full w-10 h-10 hover:ml-0.5 flex items-center justify-center bg-lime-100 hover:bg-lime-200 " x-bind:data-last-refresh="Date.now()">
                      <svg class="w-4 h-4 stroke-current text-lime-600 transform transition ease-in-out duration-100 hover:-rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path></svg>
                    </div>
                    {{-- <div style="height: 30rem" class="w-full border-l-2 border-lime-200"> --}}
                    <div style="height: 60rem" class="w-full border-l-2 border-lime-200">
                       <div class=" h-36 pl-8 pr-5 -mt-4 overflow-y-hidden">
                        <span class=" text-base font-medium leading-6 text-lime-600">Activity 1</span>
                        <p class="mt-1 text-sm text-lime-900 text-justify">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                        </p>
                       </div>
                       <div class=" h-40 pl-8 pr-5 pt-4 overflow-y-hidden">
                        <span class="text-base mt-2.5 font-medium leading-6 text-lime-600">Activity 2</span>
                        <p class="mt-1 text-sm text-lime-900 text-justify" >
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                        </p>
                       </div>
                       <div class="h-36 mt-4 pl-8 pr-5 overflow-y-hidden">
                        <span class="text-base font-medium leading-6 text-lime-600">Activity 3</span>
                        <p class="mt-1 text-sm text-lime-900 text-justify">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                        </p>
                       </div>
                       <div class="h-36 mt-4 pl-8 pr-5 overflow-y-hidden">
                        <span class="text-base font-medium leading-6 text-lime-600">Activity 4</span>
                        <p class="mt-1 text-sm text-lime-900 text-justify">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                        </p>
                       </div>
                       <div class="h-36 mt-4 pl-8 pr-5 overflow-y-hidden">
                        <span class="text-base font-medium leading-6 text-lime-600">Activity 5</span>
                        <p class="mt-1 text-sm text-lime-900 text-justify">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                        </p>
                       </div>
                       <div class="h-36 mt-4 pl-8 pr-5 overflow-y-hidden">
                        <span class="text-base font-medium leading-6 text-lime-600">Activity 6</span>
                        <p class="mt-1 text-sm text-lime-900 text-justify">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a.
                        </p>
                       </div>
                    </div>
                   </div>
                </div>
              </div>
              <div class="col-span-4 lg:col-span-3 rounded-sm p-4 bg-white">
                <div class="relative">
                  <div class="absolute top-0 right-0 -mt-2 -ml cursor-pointer rounded-full w-8 h-8 hover:ml-0.5 flex items-center justify-center hover:bg-gray-200 hover:bg-opacity-20">
                    <svg class="w-5 h-5 stroke-current text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                  </div>
                </div>
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-12">
                      <h3 class="text-lg font-medium leading-6 text-lime-600">Record Progress</h3>
                      <p class="mt-1 text-sm text-lime-900">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare convallis justo, eget ornare lorem consectetur a. Donec bibendum.
                      </p>
                      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-6">
                        <table class="min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                            <tr>
                              <th scope="col" class="w-1/4 px-3 py-2 pl-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Department
                              </th>
                              <th scope="col" class="w-2/4 px-3 py-2 pl-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Progress
                              </th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                              <td class="px-6 py-1 whitespace-nowrap">
                                <div class="flex items-center">
                                  <div class="flex-shrink-0 h-10 w-25">
                                    <div class="flex -space-x-1 overflow-hidden mt-2">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                      CET
                                    </div>
                                    <div class="text-sm text-gray-500">
                                      College of Engineering and Technology
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="px-6 py-1 whitespace-nowrap">
                                <div class="relative pt-1">
                                  <div class="flex mb-2 items-center justify-between">
                                    <div>
                                      <span class="text-xs font-semibold inline-block py-0.5 px-2 uppercase rounded-full text-pink-600 bg-pink-200">
                                        Task in progress
                                      </span>
                                    </div>
                                    <div class="text-right">
                                      <span 
                                        x-data="{percent: 0, timer : null}" x-init="timer = setInterval(() => percent === 68 ? clearInterval(timer) : percent++, 5)"
                                        x-text="percent + '%'"
                                        class="text-xs font-semibold inline-block text-pink-600 tabular-nums">
                                      </span>
                                    </div>
                                  </div>
                                  <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-pink-200">
                                    <div 
                                      x-data="{ show: false }" x-show="show" x-init="setTimeout(() => show = true, 100)"
                                      x-transition:enter="transform transition ease-in-out duration-600 sm:duration-500"
                                      x-transition:enter-start="-translate-x-full"
                                      x-transition:enter-end="translate-x-0"
                                      x-transition:leave="transform transition ease-in-out duration-600 sm:duration-500"
                                      x-transition:leave-start="translate-x-0"
                                      x-transition:leave-end="-translate-x-full"
                                      style="width:68%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-6 py-1 whitespace-nowrap">
                                <div class="flex items-center">
                                  <div class="flex-shrink-0 h-10 w-25">
                                    <div class="flex -space-x-1 overflow-hidden mt-2">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                     CAS
                                    </div>
                                    <div class="text-sm text-gray-500">
                                     College of Arts and Sciences
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="px-6 py-1 whitespace-nowrap">
                                <div class="relative pt-1">
                                  <div class="flex mb-2 items-center justify-between">
                                    <div>
                                      <span class="text-xs font-semibold inline-block py-0.5 px-2 uppercase rounded-full text-indigo-600 bg-indigo-200">
                                        Task in progress
                                      </span>
                                    </div>
                                    <div class="text-right">
                                      <span 
                                        x-data="{percent: 0, timer : null}" x-init="timer = setInterval(() => percent === 20 ? clearInterval(timer) : percent++, 5)"
                                        x-text="percent + '%'"
                                        class="text-xs font-semibold inline-block text-indigo-600 tabular-nums">
                                      </span>
                                    </div>
                                  </div>
                                  <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-indigo-200">
                                    <div 
                                      x-data="{ show: false }" x-show="show" x-init="setTimeout(() => show = true, 100)"
                                      x-transition:enter="transform transition ease-in-out duration-600 sm:duration-500"
                                      x-transition:enter-start="-translate-x-full"
                                      x-transition:enter-end="translate-x-0"
                                      x-transition:leave="transform transition ease-in-out duration-600 sm:duration-500"
                                      x-transition:leave-start="translate-x-0"
                                      x-transition:leave-end="-translate-x-full"
                                      style="width:20%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-500"></div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-6 py-1 whitespace-nowrap">
                                <div class="flex items-center">
                                  <div class="flex-shrink-0 h-10 w-25">
                                    <div class="flex -space-x-1 overflow-hidden mt-2">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                      <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>
                                  </div>
                                  <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                      CBA
                                    </div>
                                    <div class="text-sm text-gray-500">
                                      College of Business Administration
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="px-6 py-1 whitespace-nowrap">
                                <div class="relative pt-1">
                                  <div class="flex mb-2 items-center justify-between">
                                    <div>
                                      <span class="text-xs font-semibold inline-block py-0.5 px-2 uppercase rounded-full text-amber-600 bg-amber-200">
                                        Task in progress
                                      </span>
                                    </div>
                                    <div class="text-right">
                                      <span
                                        x-data="{percent: 0, timer : null}" x-init="timer = setInterval(() => percent === 80 ? clearInterval(timer) : percent++, 5)"
                                        x-text="percent + '%'"
                                        class="text-xs font-semibold inline-block text-amber-600 tabular-nums">
                                      </span>
                                    </div>
                                  </div>
                                  <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-amber-200">
                                    <div 
                                      x-data="{ show: false }" x-show="show" x-init="setTimeout(() => show = true, 100)"
                                      x-transition:enter="transform transition ease-in-out duration-600 sm:duration-500"
                                      x-transition:enter-start="-translate-x-full"
                                      x-transition:enter-end="translate-x-0"
                                      x-transition:leave="transform transition ease-in-out duration-600 sm:duration-500"
                                      x-transition:leave-start="translate-x-0"
                                      x-transition:leave-end="-translate-x-full"
                                      style="width:80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-amber-500"></div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <!-- More people... -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main> 
<!-- end section  -->

<!-- Bonus Animation -->
<!-- <div class="flex items-center justify-center min-h-screen">
  <div x-data="{ isMenuOpen: false }" class="relative mr-56"> 
    <div x-show="isMenuOpen"
      x-transition:enter="transition ease-in-out duration-300"
      x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
      x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
      x-transition:leave="transition ease-in-out duration-300" 
      x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
      x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2"
      class="absolute inset-y-0 left-1/2 h-20 flex items-center pl-12 pr-3 space-x-2 bg-gray-800 rounded-tr-full rounded-br-full">
      <button class="h-16 w-16 inline-flex items-center justify-center text-blue-600 hover:bg-white hover:bg-opacity-5 rounded-full">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-12 w-12">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>
      </button>
      <button class="h-16 w-16 inline-flex items-center justify-center text-blue-600 hover:bg-white hover:bg-opacity-5 rounded-full">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-12 w-12">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
        </svg>
      </button>
      <button class="h-16 w-16 inline-flex items-center justify-center text-blue-600 hover:bg-white hover:bg-opacity-5 rounded-full">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-12 w-12">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
        </svg>
      </button>
    </div>
    <button class="relative h-20 w-20 inline-flex items-center justify-center bg-gray-800 hover:bg-gray-700 rounded-tl-full rounded-bl-full focus:outline-none transition-all duration-300" :class="isMenuOpen ? 'bg-blue-600 hover:bg-blue-600' : 'rounded-tr-full rounded-br-full'" @click="isMenuOpen = !isMenuOpen">
      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-12 w-12 text-white">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
      </svg>
    </button>
  </div>
</div> -->
<!-- end region -->
</body>
</html>

<script src="{{asset('js/base.js')}}"></script>