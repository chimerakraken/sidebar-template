@extends('layouts.layer')
@section('content')

<div class="p-5 sm:p-10 lg:p-32">
    <div class="grid grid-cols-4 gap-8 p-5 lg:p-32 pt-10">
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" @mouseenter="hovered = true" @mouseleave="hovered = false" class=" overflow-hidden relative col-span-4 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-105 ease-in-out duration-300 ">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=922&q=80"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span class="text-lg font-semibold text-gray-600">Ajay Frederick</span><br>
                <span class="text-sm text-gray-600">Subject: ECON111</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-9 px-10">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div class="rounded-full overflow-hidden py-1 px-0 text-xs text-center pl-5 ring-2 ring-lime-600 w-auto uppercase bg-lime-600 text-white font-semibold cursor-pointer shadow">
                        RATE
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
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
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer top-4 right-4 absolute" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185744150_4200791229972675_7231299350137364321_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeEaKGCvwhiCh9vAiU1ud9vO6vlXHypp8trq-VcfKmny2neYSCKayxttm9RO29ABPB3Z8n1U8Aqsl8NH0kDgfTp1&_nc_ohc=DT9g01CxdfEAX8ecw5a&_nc_ht=scontent.fmnl9-1.fna&oh=8259aa9ecbd2a2e8e7b2317ab702e3d7&oe=60C951D7" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-gray-500">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        New Building</span>
                    <br><br>
                    <span class="text-sm font-base text-gray-600">Subject: ECON111</span><br>
                    <span class="text-sm font-base text-gray-600">Room: 3017</span><br>
                    <span class="text-sm font-base text-gray-600">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" @mouseenter="hovered = true" @mouseleave="hovered = false" class=" overflow-hidden relative col-span-4 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-105 ease-in-out duration-300 ">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=633&q=80"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span class="text-lg font-semibold text-gray-600">Nate Rollins</span><br>
                <span class="text-sm text-gray-600">Subject: ECON111</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-9 px-10">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div class="rounded-full py-1 px-0 text-xs text-center pl-5 ring-2 ring-amber-600 w-auto uppercase bg-amber-600 text-white font-semibold cursor-pointer shadow">
                        RATED
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
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
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer top-4 right-4 absolute" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185248574_4200792603305871_4903160604569564686_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeG3ULVqM33q7a2BNpYXnYmMxQa2A0ATiEjFBrYDQBOISNT0ocrc4_wJvdgp8ojC6yefliGYV_5xXNY5DIUpOn6X&_nc_ohc=TxEyZ_3FyEoAX_niNny&_nc_ht=scontent.fmnl9-1.fna&oh=8fa60b3e50772995e808d2ae970e3d06&oe=60C6EC8B" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-gray-500">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        Doherty</span>
                    <br><br>
                    <span class="text-sm font-base text-gray-600">Subject: ECON111</span><br>
                    <span class="text-sm font-base text-gray-600">Room: 3017</span><br>
                    <span class="text-sm font-base text-gray-600">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" @mouseenter="hovered = true" @mouseleave="hovered = false" class=" overflow-hidden relative col-span-4 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-105 ease-in-out duration-300 ">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://chromatichq.com/sites/default/files/styles/team_author_image/public/user-photos/CHQ-Edit-0159_1.jpg?itok=FgUyf-ef"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span class="text-lg font-semibold text-gray-600">Chelsy Fuentes</span><br>
                <span class="text-sm text-gray-600">Subject: ECON111</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-9 px-10">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div class="rounded-full py-1 px-0 text-xs text-center pl-5 ring-2 ring-amber-600 w-auto uppercase bg-amber-600 text-white font-semibold cursor-pointer shadow">
                        RATED
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
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
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer top-4 right-4 absolute" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185744150_4200791229972675_7231299350137364321_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeEaKGCvwhiCh9vAiU1ud9vO6vlXHypp8trq-VcfKmny2neYSCKayxttm9RO29ABPB3Z8n1U8Aqsl8NH0kDgfTp1&_nc_ohc=DT9g01CxdfEAX8ecw5a&_nc_ht=scontent.fmnl9-1.fna&oh=8259aa9ecbd2a2e8e7b2317ab702e3d7&oe=60C951D7" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-gray-500">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        New Building</span>
                    <br><br>
                    <span class="text-sm font-base text-gray-600">Subject: ECON111</span><br>
                    <span class="text-sm font-base text-gray-600">Room: 3017</span><br>
                    <span class="text-sm font-base text-gray-600">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" @mouseenter="hovered = true" @mouseleave="hovered = false" class=" overflow-hidden relative col-span-4 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-105 ease-in-out duration-300 ">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=633&q=80"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span class="text-lg font-semibold text-gray-600">Nate Rollins</span><br>
                <span class="text-sm text-gray-600">Subject: ECON111</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-9 px-10">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div class="rounded-full py-1 px-0 text-xs text-center pl-5 ring-2 ring-amber-600 w-auto uppercase bg-amber-600 text-white font-semibold cursor-pointer shadow">
                        RATED
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
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
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer top-4 right-4 absolute" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185248574_4200792603305871_4903160604569564686_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeG3ULVqM33q7a2BNpYXnYmMxQa2A0ATiEjFBrYDQBOISNT0ocrc4_wJvdgp8ojC6yefliGYV_5xXNY5DIUpOn6X&_nc_ohc=TxEyZ_3FyEoAX_niNny&_nc_ht=scontent.fmnl9-1.fna&oh=8fa60b3e50772995e808d2ae970e3d06&oe=60C6EC8B" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-gray-500">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        Doherty</span>
                    <br><br>
                    <span class="text-sm font-base text-gray-600">Subject: ECON111</span><br>
                    <span class="text-sm font-base text-gray-600">Room: 3017</span><br>
                    <span class="text-sm font-base text-gray-600">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" @mouseenter="hovered = true" @mouseleave="hovered = false" class=" overflow-hidden relative col-span-4 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-105 ease-in-out duration-300 ">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://chromatichq.com/sites/default/files/styles/team_author_image/public/user-photos/CHQ-Edit-0159_1.jpg?itok=FgUyf-ef"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span class="text-lg font-semibold text-gray-600">Chelsy Fuentes</span><br>
                <span class="text-sm text-gray-600">Subject: ECON111</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-9 px-10">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div class="rounded-full py-1 px-0 text-xs text-center pl-5 ring-2 ring-amber-600 w-auto uppercase bg-amber-600 text-white font-semibold cursor-pointer shadow">
                        RATED
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
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
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer top-4 right-4 absolute" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185744150_4200791229972675_7231299350137364321_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeEaKGCvwhiCh9vAiU1ud9vO6vlXHypp8trq-VcfKmny2neYSCKayxttm9RO29ABPB3Z8n1U8Aqsl8NH0kDgfTp1&_nc_ohc=DT9g01CxdfEAX8ecw5a&_nc_ht=scontent.fmnl9-1.fna&oh=8259aa9ecbd2a2e8e7b2317ab702e3d7&oe=60C951D7" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-gray-500">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        New Building</span>
                    <br><br>
                    <span class="text-sm font-base text-gray-600">Subject: ECON111</span><br>
                    <span class="text-sm font-base text-gray-600">Room: 3017</span><br>
                    <span class="text-sm font-base text-gray-600">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" @mouseenter="hovered = true" @mouseleave="hovered = false" class=" overflow-hidden relative col-span-4 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-105 ease-in-out duration-300 ">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=922&q=80"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span class="text-lg font-semibold text-gray-600">Ajay Frederick</span><br>
                <span class="text-sm text-gray-600">Subject: ECON111</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-9 px-10">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div class="rounded-full py-1 px-0 text-xs text-center pl-5 ring-2 ring-lime-600 w-auto uppercase bg-lime-600 text-white font-semibold cursor-pointer shadow">
                        RATE
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
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
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer top-4 right-4 absolute" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185744150_4200791229972675_7231299350137364321_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeEaKGCvwhiCh9vAiU1ud9vO6vlXHypp8trq-VcfKmny2neYSCKayxttm9RO29ABPB3Z8n1U8Aqsl8NH0kDgfTp1&_nc_ohc=DT9g01CxdfEAX8ecw5a&_nc_ht=scontent.fmnl9-1.fna&oh=8259aa9ecbd2a2e8e7b2317ab702e3d7&oe=60C951D7" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-gray-500">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        New Building</span>
                    <br><br>
                    <span class="text-sm font-base text-gray-600">Subject: ECON111</span><br>
                    <span class="text-sm font-base text-gray-600">Room: 3017</span><br>
                    <span class="text-sm font-base text-gray-600">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" @mouseenter="hovered = true" @mouseleave="hovered = false" class=" overflow-hidden relative col-span-4 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-105 ease-in-out duration-300 ">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=633&q=80"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span class="text-lg font-semibold text-gray-600">Nate Rollins</span><br>
                <span class="text-sm text-gray-600">Subject: ECON111</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-9 px-10">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div class="rounded-full py-1 px-0 text-xs text-center pl-5 ring-2 ring-amber-600 w-auto uppercase bg-amber-600 text-white font-semibold cursor-pointer shadow">
                        RATED
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
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
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer top-4 right-4 absolute" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185248574_4200792603305871_4903160604569564686_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeG3ULVqM33q7a2BNpYXnYmMxQa2A0ATiEjFBrYDQBOISNT0ocrc4_wJvdgp8ojC6yefliGYV_5xXNY5DIUpOn6X&_nc_ohc=TxEyZ_3FyEoAX_niNny&_nc_ht=scontent.fmnl9-1.fna&oh=8fa60b3e50772995e808d2ae970e3d06&oe=60C6EC8B" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-gray-500">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        Doherty</span>
                    <br><br>
                    <span class="text-sm font-base text-gray-600">Subject: ECON111</span><br>
                    <span class="text-sm font-base text-gray-600">Room: 3017</span><br>
                    <span class="text-sm font-base text-gray-600">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
        <div x-data="{ hovered: false, expanded : false }" @click.away="expanded = false" @mouseenter="hovered = true" @mouseleave="hovered = false" class=" overflow-hidden relative col-span-4 md:col-span-2 lg:col-span-1 rounded shadow transition-all transform hover:scale-105 ease-in-out duration-300 ">
            <div align="center">
                <div class=" bg-gray-50 pt-10 pb-5">
                    <img class="rounded-full h-48 w-48 filter" :class="[hovered === true ? 'grayscale-0' : 'grayscale']" src="https://chromatichq.com/sites/default/files/styles/team_author_image/public/user-photos/CHQ-Edit-0159_1.jpg?itok=FgUyf-ef"  alt="">
                </div>
            </div>
            <div class="pt-5" align="center">
                <span class="text-lg font-semibold text-gray-600">Chelsy Fuentes</span><br>
                <span class="text-sm text-gray-600">Subject: ECON111</span>
            </div>
            <div class="grid grid-cols-2 gap-3 lg:gap-5 sm:gap-3 mb-6 mt-9 px-10">
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div @click="expanded = true "  class="rounded-full py-1 text-xs text-center bg-lime-50 ring-2 ring-lime-600 w-auto uppercase text-lime-700 font-semibold cursor-pointer shadow">
                        DETAILS
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-2 lg:col-span-1" align="center">
                    <div class="rounded-full py-1 px-0 text-xs text-center pl-5 ring-2 ring-amber-600 w-auto uppercase bg-amber-600 text-white font-semibold cursor-pointer shadow">
                        RATED
                        <svg class="w-3 h-3 inline-block ml-2 -mt-0.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
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
                <svg @click="expanded=false" class="w-5 h-5 fill-current text-white cursor-pointer top-4 right-4 absolute" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <img class=" h-3/5 w-full" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.6435-9/185744150_4200791229972675_7231299350137364321_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_eui2=AeEaKGCvwhiCh9vAiU1ud9vO6vlXHypp8trq-VcfKmny2neYSCKayxttm9RO29ABPB3Z8n1U8Aqsl8NH0kDgfTp1&_nc_ohc=DT9g01CxdfEAX8ecw5a&_nc_ht=scontent.fmnl9-1.fna&oh=8259aa9ecbd2a2e8e7b2317ab702e3d7&oe=60C951D7" alt="">
                <div class="p-5">
                    <span class="text-lg font-semibold text-gray-500">
                        <svg class="w-4 h-4 inline-block -mt-0.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        New Building</span>
                    <br><br>
                    <span class="text-sm font-base text-gray-600">Subject: ECON111</span><br>
                    <span class="text-sm font-base text-gray-600">Room: 3017</span><br>
                    <span class="text-sm font-base text-gray-600">Schedule: 8:30AM - 10:30AM MWF</span><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection