@extends('layouts.layer')
@section('content')

<div class="p-5 sm:p-10 lg:p-32" x-data="{ openmodal: false, titlemodal: ''}">
    <div class="grid grid-cols-5 gap-8 p-5 lg:p-20 pt-10">
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" x-on:mouseover="hovered = true" x-on:mouseleave="hovered = false" class=" overflow-hidden relative col-span-5 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-95 ease-in-out duration-300 scale-90">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=922&q=80"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span x-id="teachername1" x-data="{ name: $el.innerHTML }" class="text-lg font-semibold text-lime-900" >Ajay Frederick</span><br>
                <span class="text-sm text-lime-900">IT136: PROJECT MANAGEMENT</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-7 px-7">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="$parent.openmodal = true; $parent.titlemodal = $component('teachername1').name" class="rounded-full overflow-hidden py-1 px-0 text-xs text-center pl-5 ring-2 ring-lime-600 w-auto uppercase bg-lime-600 text-white font-semibold cursor-pointer shadow">
                        RATE <span class="lg:hidden">TEACHER</span>
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                    </div>
                </div>
               
            </div>
            <div
            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:enter-start="translate-y-full"
            x-transition:enter-end="-translate-y-0"
            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:leave-start="-translate-y-0"
            x-transition:leave-end="translate-y-full"
            x-show="expanded" class="absolute h-full bg-white shadow top-0 w-full rounded" >
                <div class="absolute top-5 right-2.5 -mt-2 -ml cursor-pointer rounded-full w-8 h-8 hover:ml-0.5 flex items-center justify-center hover:bg-gray-200 hover:bg-opacity-20">
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </div>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185744150_4200791229972675_7231299350137364321_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeEaKGCvwhiCh9vAiU1ud9vO6vlXHypp8trq-VcfKmny2neYSCKayxttm9RO29ABPB3Z8n1U8Aqsl8NH0kDgfTp1&_nc_ohc=DT9g01CxdfEAX8ecw5a&_nc_ht=scontent.fmnl9-1.fna&oh=8259aa9ecbd2a2e8e7b2317ab702e3d7&oe=60C951D7" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-lime-900">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        New Building</span>
                    <br><br>
                    <span class="text-sm font-base text-lime-900">Subject: IT136</span><br>
                    <span class="text-sm font-base text-lime-900">Room: 3017</span><br>
                    <span class="text-sm font-base text-lime-900">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" x-on:mouseover="hovered = true" x-on:mouseleave="hovered = false" class=" overflow-hidden relative col-span-5 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-95 ease-in-out duration-300 scale-90">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=922&q=80"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span x-id="teachername2" x-data="{ name: $el.innerHTML }" class="text-lg font-semibold text-lime-900" >Rudy Sanderson</span><br>
                <span class="text-sm text-lime-900">IT136: PROJECT MANAGEMENT</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-7 px-7">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="$parent.openmodal = true; $parent.titlemodal = $component('teachername2').name" class="rounded-full overflow-hidden py-1 px-0 text-xs text-center pl-5 ring-2 ring-lime-600 w-auto uppercase bg-lime-600 text-white font-semibold cursor-pointer shadow">
                        RATE <span class="lg:hidden">TEACHER</span>
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                    </div>
                </div>
               
            </div>
            <div
            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:enter-start="translate-y-full"
            x-transition:enter-end="-translate-y-0"
            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:leave-start="-translate-y-0"
            x-transition:leave-end="translate-y-full"
            x-show="expanded" class="absolute h-full bg-white shadow top-0 w-full rounded" >
                <div class="absolute top-5 right-2.5 -mt-2 -ml cursor-pointer rounded-full w-8 h-8 hover:ml-0.5 flex items-center justify-center hover:bg-gray-200 hover:bg-opacity-20">
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </div>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185744150_4200791229972675_7231299350137364321_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeEaKGCvwhiCh9vAiU1ud9vO6vlXHypp8trq-VcfKmny2neYSCKayxttm9RO29ABPB3Z8n1U8Aqsl8NH0kDgfTp1&_nc_ohc=DT9g01CxdfEAX8ecw5a&_nc_ht=scontent.fmnl9-1.fna&oh=8259aa9ecbd2a2e8e7b2317ab702e3d7&oe=60C951D7" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-lime-900">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        New Building</span>
                    <br><br>
                    <span class="text-sm font-base text-lime-900">Subject: IT136</span><br>
                    <span class="text-sm font-base text-lime-900">Room: 3017</span><br>
                    <span class="text-sm font-base text-lime-900">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" x-on:mouseover="hovered = true" x-on:mouseleave="hovered = false" class=" overflow-hidden relative col-span-5 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-95 ease-in-out duration-300 scale-90">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=922&q=80"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span x-id="teachername3" x-data="{ name: $el.innerHTML, tooltip: false }" class="text-lg font-semibold text-lime-900">Zayne Erickson
                <svg x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="w-5 h-5 inline-block -mt-1 fill-current text-lime-600 cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="relative" x-show.transition.origin.top="tooltip">
                    <span class="absolute top-0 z-10 w-28 p-1 -mt-1 text-sm leading-tight  transform -translate-x-1/2 -translate-y-full bg-lime-500 text-lime-50 rounded-lg shadow-lg">
                       Evaluated 
                       <svg class="w-4 h-4 inline-block -mt-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </span>
                        <svg class="absolute z-10 w-6 h-6 text-lime-500 transform -translate-x-12 -translate-y-3 fill-current stroke-current" width="8" height="8">
                            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
                        </svg>
                    </span>
                    </span>
                </span>
                <br>
                <span class="text-sm text-lime-900">IT136: PROJECT MANAGEMENT</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-7 px-7">
                <div class="col-span-2 sm:col-span-2 lg:col-span-2" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                {{-- <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div class="rounded-full overflow-hidden py-1 px-0 text-xs text-center pl-5 ring-2 ring-amber-600 w-auto uppercase bg-amber-600 text-white font-semibold cursor-pointer shadow">
                        RATED 
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                </div> --}}
               
            </div>
            <div
            x-transition:enter="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:enter-start="translate-y-full"
            x-transition:enter-end="-translate-y-0"
            x-transition:leave="transform transition ease-in-out duration-500 sm:duration-500"
            x-transition:leave-start="-translate-y-0"
            x-transition:leave-end="translate-y-full"
            x-show="expanded" class="absolute h-full bg-white shadow top-0 w-full rounded" >
                <div class="absolute top-5 right-2.5 -mt-2 -ml cursor-pointer rounded-full w-8 h-8 hover:ml-0.5 flex items-center justify-center hover:bg-gray-200 hover:bg-opacity-20">
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </div>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185744150_4200791229972675_7231299350137364321_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeEaKGCvwhiCh9vAiU1ud9vO6vlXHypp8trq-VcfKmny2neYSCKayxttm9RO29ABPB3Z8n1U8Aqsl8NH0kDgfTp1&_nc_ohc=DT9g01CxdfEAX8ecw5a&_nc_ht=scontent.fmnl9-1.fna&oh=8259aa9ecbd2a2e8e7b2317ab702e3d7&oe=60C951D7" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-lime-900">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        New Building</span>
                    <br><br>
                    <span class="text-sm font-base text-lime-900">Subject: IT136</span><br>
                    <span class="text-sm font-base text-lime-900">Room: 3017</span><br>
                    <span class="text-sm font-base text-lime-900">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        
    </div>
    
    <div @keydown.window.escape="openmodal = false" x-show="openmodal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true" style="display: none;">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div x-show="openmodal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click=" openmodal = false" aria-hidden="true" style="display: none;"></div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        
            <div x-show="openmodal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" style="display: none;">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-lime-50 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    Rate your teacher: <span x-text="titlemodal"></span>
                    </h3>
                    <div class="mt-2">
                    <p class="text-sm text-gray-500">
                        The following is subject to confidentiality, do you still wish to proceed?
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-lime-600 text-base font-medium text-white hover:bg-lime-700 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-lime-500 sm:ml-3 sm:w-auto sm:text-sm" @click=" openmodal = false">
                Rate now
                </button>
                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click=" openmodal = false">
                Cancel
                </button>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection