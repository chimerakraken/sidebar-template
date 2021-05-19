@extends('layouts.layer')
@section('content')



<div class="min-h-screen p-6 lg:px-60 md:px-52">
    {{ $profname }}

    <div>
        <div class="hidden sm:block mt-52" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-2 w-full">
            <div class="col-span-5 sm:col-span-5 lg:col-span-3 mb-6">
                <span class="text-lg font-medium leading-6 text-lime-900">A. Teacher</span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900">Rate</span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden  lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900">Description</span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
             <p class="w-full text-lime-900"><span class=" mr-5">1.</span>Displays self-confidence and presence of mind.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                        <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q1desc').name = 'Very Rarely'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q1desc').name = 'Sometimes'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q1desc').name = 'Regularly'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q1desc').name = 'Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q1desc').name = 'Very Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q1desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">2.</span>Speaks clearly, distinctly, and in a manner that can be easily understood.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q2desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q2desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q2desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q2desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q2desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q2desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">3.</span>Speaks in a well, modulated voice enough to be heard by the class.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q3desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q3desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q3desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q3desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q3desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q3desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">4.</span>Speaks the medium of instruction (English or Filipino) easily, readily & fluently.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q4desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q4desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q4desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q4desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q4desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q4desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">5.</span>Demonstrates mastery of the subject matter.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q5desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q5desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q5desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q5desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q5desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q5desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">6.</span>Answers the question in an expert and knowledgeable matter.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q6desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q6desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q6desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q6desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q6desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q6desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">7.</span>Handles students' ideas and opinions objectively.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q7desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q7desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q7desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q7desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q7desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q7desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
        </div>
        {{-- <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
        </div> --}}
        <div class="grid grid-cols-5 gap-2 w-full mt-7">
            <div class="col-span-5 sm:col-span-5 lg:col-span-3 mb-6">
                <span class="text-lg font-medium leading-6 text-lime-900">B. Teaching Procedures</span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden  lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
             <p class="w-full text-lime-900"><span class=" mr-5">1.</span>Presents and organizes learning materials in a proper order that is easily understandable.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                        <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q8desc').name = 'Very Rarely'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q8desc').name = 'Sometimes'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q8desc').name = 'Regularly'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q8desc').name = 'Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q8desc').name = 'Very Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q8desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">2.</span>Integrates and relates subject matter to other fields of discipline</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q9desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q9desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q9desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q9desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q9desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q9desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">3.</span>Uses teaching strategies that stimulate and provoke critical thinking.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q10desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q10desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q10desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q10desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q10desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q10desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">4.</span>Able to pace instruction effectively.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q11desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q11desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q11desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q11desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q11desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q11desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">5.</span>Arouses and maintains students' interests.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q12desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q12desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q12desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q12desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q12desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q12desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">6.</span>Controls class firmly.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q13desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q13desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q13desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q13desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q13desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q13desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>    
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">7.</span>Demonstrates appropriate technique of asking question.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q14desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q14desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q14desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q14desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q14desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q14desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">8.</span>Uses varied teaching aids and devices to make the lesson more interesting.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q15desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q15desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q15desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q15desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q15desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q15desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-2 w-full mt-7">
            <div class="col-span-5 sm:col-span-5 lg:col-span-3 mb-6">
                <span class="text-lg font-medium leading-6 text-lime-900">C. Students</span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden  lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
             <p class="w-full text-lime-900"><span class=" mr-5">1.</span>Presents and organizes learning materials in a proper order that is easily understandable.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                        <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q16desc').name = 'Very Rarely'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q16desc').name = 'Sometimes'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q16desc').name = 'Regularly'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q16desc').name = 'Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q16desc').name = 'Very Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q16desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">2.</span>Integrates and relates subject matter to other fields of discipline</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q17desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q17desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q17desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q17desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q17desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q17desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">3.</span>Uses teaching strategies that stimulate and provoke critical thinking.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q18desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q18desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q18desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q18desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q18desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q18desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-2 w-full mt-7">
            <div class="col-span-5 sm:col-span-5 lg:col-span-3 mb-6">
                <span class="text-lg font-medium leading-6 text-lime-900">D. General Observation</span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden  lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
             <p class="w-full text-lime-900"><span class=" mr-5">1.</span>Maintains harmonious relationship with students.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                        <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q19desc').name = 'Very Rarely'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q19desc').name = 'Sometimes'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q19desc').name = 'Regularly'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q19desc').name = 'Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q19desc').name = 'Very Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q19desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">2.</span>Brings about an atmosphere conductive for natural discipline and learning.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q20desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q20desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q20desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q20desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q20desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q20desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-2 w-full mt-7">
            <div class="col-span-5 sm:col-span-5 lg:col-span-3 mb-6">
                <span class="text-lg font-medium leading-6 text-lime-900">E. Methodology</span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 hidden  lg:block">
                <span class="text-lg font-medium leading-6 text-lime-900"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
             <p class="w-full text-lime-900"><span class=" mr-5">1.</span>Provide accurate and up-to-date information about the subject content.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                        <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q21desc').name = 'Very Rarely'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q21desc').name = 'Sometimes'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q21desc').name = 'Regularly'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q21desc').name = 'Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                        <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q21desc').name = 'Very Often'">
                            <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q21desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">2.</span>Uses varied resources about the subject matter.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q22desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q22desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q22desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q22desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q22desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q22desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">3.</span>Provides activities in the class that are relevant to the objective/concept in the syllabus.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">4.</span>Articulate ideas, information, and concepts fluently and clearly.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">5.</span>Uses teaching methods/strategies suitable to the subject content.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">6.</span>States clear and definite expectations on students' behavior and performance.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">7.</span>Shows evidence that he/she is up-to-date with the advances of his/her field.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">8.</span>Assigns readings that acquaint students with professional books, periodicals and/or research findings relevant to the course.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">9.</span>Encourages students to analyze or evaluate information of ideas critically.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">10.</span>Provides opportunities for the development of increased library and scientific research competence among students through assigned readings or actual work.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">11.</span>Gives examinations/tests that reflect the important aspect of the subject.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">12.</span>Provides variety of assessment technique to monitor achievement of stated objective.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">13.</span>Gives course requirements (e.g. term papers, case studies...) that reflect course objective.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">14.</span>Provides oral and written feedback regarding student's performance, assignments and other requirements.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q23desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q23desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q23desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q23desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q23desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q23desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
        </div>
        <div class="hidden sm:block mt-3" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-3 mb-3 mt-5 lg:mt-3 sm:mt-5">
            <span class="text-base font-medium leading-6 text-lime-900">The items below ask you to tick/check the box that corresponds to your response.</span>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-3 mt-8 lg:mt-3">
            <p class="w-full text-lime-900"><span class=" mr-5">1.</span>The goals and objectives of the subject were discussed and made clear at the start of the semester.</p>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
            {{-- grid work around for svg animations --}}
            <div class="grid grid-cols-6 lg:grid-cols-5 px-0 gap-2 lg:gap-0 lg:px-10 pt-2 lg:pt-5">
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a full extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a great extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a moderate extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a slight extent</span>
                </div> 

                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">None at all</span>
                </div> 
            </div>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-3 mt-5 lg:mt-3">
            <p class="w-full text-lime-900"><span class=" mr-5">2.</span>The subject has developed my communication, problem solving and decision making skills</p>
       </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
            {{-- grid work around for svg animations --}}
            <div class="grid grid-cols-6 lg:grid-cols-5 px-0 gap-2 lg:gap-0 lg:px-10  pt-2 lg:pt-5">
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a full extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a great extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a moderate extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a slight extent</span>
                </div> 

                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">None at all</span>
                </div> 
            </div>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-3 mt-5 lg:mt-3">
            <p class="w-full text-lime-900"><span class=" mr-5">3.</span>I would rate the overall value of this course to my personal/professional growth as:</p>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
            {{-- grid work around for svg animations --}}
            <div class="grid grid-cols-6 lg:grid-cols-5 px-0 gap-2 lg:gap-0 lg:px-10  pt-2 lg:pt-5">
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a full extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a great extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a moderate extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a slight extent</span>
                </div> 

                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">None at all</span>
                </div> 
            </div>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-3 mt-5 lg:mt-3">
            <p class="w-full text-lime-900"><span class=" mr-5">4.</span>I would rate the overall value of the class session as:</p>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
            {{-- grid work around for svg animations --}}
            <div class="grid grid-cols-6 lg:grid-cols-5 px-0 gap-2 lg:gap-0 lg:px-10 pt-2 lg:pt-5">
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a full extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a great extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a moderate extent</span>
                </div> 
                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">To a slight extent</span>
                </div> 

                <div class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox path inline-block">
                            <input type="checkbox" class=" cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                            </svg>
                        </label>
                    </div>
                    <span class="absolute text-base leading-6 text-lime-900 inline-block ml-6 lg:ml-6 -mt-0.5">None at all</span>
                </div> 
            </div>
        </div>
        <div class="hidden sm:block mt-3" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-3 mb-3 mt-6 lg:mt-3">
            <span class="text-base font-medium leading-6 text-lime-900">COMMENTS:</span>
        </div>
    </div>
</div>
@endsection