@extends('layouts.layer')
@section('content')



<div class="min-h-screen p-6 lg:px-60 md:px-52">
    {{ $profname }}
    <div class=" text-center pt-32 lg:pt-32 relative">
        <img src="{{asset('img/ndmu-seal-small.png')}}" style="top: 6.0rem;" class=" w-36 h-36 absolute -left-10  hidden md:hidden 2xl:left-28 2xl:block lg:block" alt="">
        <img src="{{asset('img/green-university.jpg')}}" class=" w-36 h-28 absolute top-28  -right-10 2xl:right-24 hidden md:hidden 2xl:block lg:block" alt="">
        <h3 class=" text-2xl lg:text-3xl font-medium leading-6 text-lime-900 uppercase tracking-widest">Notre Dame of Marbel University</h3>
        <h3 class=" text-xl leading-6 text-lime-900 mt-3">City of Koronadal</h3>
        <h3 class=" text-xl leading-6 text-lime-900 mt-3">South Cotabato Province, Philippines</h3>
        <h3 class=" text-xl lg:text-2xl font-semibold leading-6 text-lime-900 uppercase mt-28">Student Assessment of Teachers' Performance</h3>
    </div>
    <div class=" text-center">
        <h3 class=" text-xl leading-6 text-lime-900 mt-20 underline">Carmel A. Mcintosh, MBA, CPP</h3>
        <h3 class=" text-base leading-6 text-lime-900 mt-1">Name of Teacher</h3>
    </div>
    <div class=" grid grid-cols-4 h-auto">
        <div class=" col-span-4 sm:col-span-1 text-center">
            <h3 class=" text-xl leading-6 text-lime-900 mt-20 underline">PHILSCI111</h3>
            <h3 class=" text-base leading-6 text-lime-900 mt-1">Subject</h3>
        </div>
        <div class=" col-span-4 sm:col-span-1 text-center">
            <h3 class=" text-xl leading-6 text-lime-900 mt-20 underline">7:30AM-9:30AM TTH </h3>
            <h3 class=" text-base leading-6 text-lime-900 mt-1">Time/Day</h3>
        </div>
        <div class=" col-span-4 sm:col-span-1 text-center">
            <h3 class=" text-xl leading-6 text-lime-900 mt-20 underline">DOHERTY101</h3>
            <h3 class=" text-base leading-6 text-lime-900 mt-1">Room</h3>
        </div>
        <div class=" col-span-4 sm:col-span-1 text-center">
            <h3 class=" text-xl leading-6 text-lime-900 mt-20 underline"  x-data="{ date: moment(new Date()).format('dddd MMMM Do , YYYY')}" x-text="date"></h3>
            <h3 class=" text-base leading-6 text-lime-900 mt-1">Date</h3>
        </div>
    </div>
    <div class=" mt-12">
        <p class=" italic text-base text-lime-900">
            Dear Students,
        </p>
        <br>
        <p class=" italic text-base text-lime-900" style="text-indent: 30px;">
            We are asking you to help use assess the teaching performance of your teachers. Please provide us with valuable feedback on their performance.
            Your honest answers will benefit both your instructors and you because this information will hopefully help them improve their weak points and maintain their strong points.
        </p>
        <br>
        <p class=" italic text-base text-lime-900" style="text-indent: 30px;">
            Using the scale described below, please rate your teacher in this subject on the basis on your own experience with him/her. Read each item carefully and wirte your response
            in the box provided at the end of each item. Please try to answer all items. Whatever answers you give will not affect you in any way in relation to your grades.
            Rest assured you answers are kept confidential.
        </p>
    </div>
    <div class=" mt-14 lg:mt-7">
        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-2 w-full mt-4">
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
                <div class="" x-id="q3" x-data="{ rated: 0}">
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
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q24desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q24desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q24desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q24desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q24desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q24desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">5.</span>Uses teaching methods/strategies suitable to the subject content.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q25desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q25desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q25desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q25desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q25desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q25desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">6.</span>States clear and definite expectations on students' behavior and performance.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q26desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q26desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q26desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q26desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q26desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q26desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">7.</span>Shows evidence that he/she is up-to-date with the advances of his/her field.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q27desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q27desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q27desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q27desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q27desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q27desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">8.</span>Assigns readings that acquaint students with professional books, periodicals and/or research findings relevant to the course.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q28desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q28desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q28desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q28desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q28desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q28desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">9.</span>Encourages students to analyze or evaluate information of ideas critically.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q29desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q29desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q29desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q29desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q29desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q29desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">10.</span>Provides opportunities for the development of increased library and scientific research competence among students through assigned readings or actual work.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q30desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q30desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q30desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q30desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q30desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q30desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">11.</span>Gives examinations/tests that reflect the important aspect of the subject.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q31desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q31desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q31desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q31desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q31desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q31desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">12.</span>Provides variety of assessment technique to monitor achievement of stated objective.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q32desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q32desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q32desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q32desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q32desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q32desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">13.</span>Gives course requirements (e.g. term papers, case studies...) that reflect course objective.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q33desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q33desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q33desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q33desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q33desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q33desc" x-data="{name: ''}">
                <span class="w-full text-lime-900" x-text="name"></span>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-3">
                <p class="w-full text-lime-900"><span class=" mr-5">14.</span>Provides oral and written feedback regarding student's performance, assignments and other requirements.</p>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
                <div class="" x-id="q1" x-data="{ rated: 0}">
                    <div class="inline-block">
                           <button class="focus:outline-none mx-0.5" @click=" rated = 1; $component('q34desc').name = 'Very Rarely'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 1 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 2; $component('q34desc').name = 'Sometimes'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 2 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 3; $component('q34desc').name = 'Regularly'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 3 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 4; $component('q34desc').name = 'Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 4 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                           </button>
                           <button class="focus:outline-none mx-0.5" @click=" rated = 5; $component('q34desc').name = 'Very Often'">
                               <svg class="w-6 h-6 text-gray-300" :class="[rated >= 5 ? 'text-amber-500' : 'text-gray-300']" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>            
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-5 sm:col-span-5 lg:col-span-1 mb-6 lg:mb-0 hidden  lg:block" x-id="q34desc" x-data="{name: ''}">
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
            <div  class="grid grid-cols-6 lg:grid-cols-5 px-0 gap-2 lg:gap-0 lg:px-10 pt-2 lg:pt-5">
                <div x-id="q1toggle1" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q1toggle2').checked = false; $component('q1toggle3').checked = false; $component('q1toggle4').checked = false; $component('q1toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">To a full extent</span>
                </div> 
                <div x-id="q1toggle2" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q1toggle1').checked = false; $component('q1toggle3').checked = false; $component('q1toggle4').checked = false; $component('q1toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">To a great extent</span>
                </div> 
                <div x-id="q1toggle3" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q1toggle1').checked = false; $component('q1toggle2').checked = false; $component('q1toggle4').checked = false; $component('q1toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">To a moderate extent</span>
                </div> 
                <div x-id="q1toggle4" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q1toggle1').checked = false; $component('q1toggle2').checked = false; $component('q1toggle3').checked = false; $component('q1toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">To a slight extent</span>
                </div> 
                <div x-id="q1toggle5" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q1toggle1').checked = false; $component('q1toggle2').checked = false; $component('q1toggle3').checked = false; $component('q1toggle4').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">None at all</span>
                </div> 
            </div>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-3 mt-5 lg:mt-3">
            <p class="w-full text-lime-900"><span class=" mr-5">2.</span>The subject has developed my communication, problem solving and decision making skills</p>
       </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
            {{-- grid work around for svg animations --}}
            <div  class="grid grid-cols-6 lg:grid-cols-5 px-0 gap-2 lg:gap-0 lg:px-10 pt-2 lg:pt-5">
                <div x-id="q2toggle1" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q2toggle2').checked = false; $component('q2toggle3').checked = false; $component('q2toggle4').checked = false; $component('q2toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Very High</span>
                </div> 
                <div x-id="q2toggle2" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q2toggle1').checked = false; $component('q2toggle3').checked = false; $component('q2toggle4').checked = false; $component('q2toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">High</span>
                </div> 
                <div x-id="q2toggle3" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q2toggle1').checked = false; $component('q2toggle2').checked = false; $component('q2toggle4').checked = false; $component('q2toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Average</span>
                </div> 
                <div x-id="q2toggle4" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q2toggle1').checked = false; $component('q2toggle2').checked = false; $component('q2toggle3').checked = false; $component('q2toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Low</span>
                </div> 
                <div x-id="q2toggle5" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q2toggle1').checked = false; $component('q2toggle2').checked = false; $component('q2toggle3').checked = false; $component('q2toggle4').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Very Low</span>
                </div> 
            </div>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-3 mt-5 lg:mt-3">
            <p class="w-full text-lime-900"><span class=" mr-5">3.</span>I would rate the overall value of this course to my personal/professional growth as:</p>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
            {{-- grid work around for svg animations --}}
            <div  class="grid grid-cols-6 lg:grid-cols-5 px-0 gap-2 lg:gap-0 lg:px-10 pt-2 lg:pt-5">
                <div x-id="q3toggle1" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q3toggle2').checked = false; $component('q3toggle3').checked = false; $component('q3toggle4').checked = false; $component('q3toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Very High</span>
                </div> 
                <div x-id="q3toggle2" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q3toggle1').checked = false; $component('q3toggle3').checked = false; $component('q3toggle4').checked = false; $component('q3toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">High</span>
                </div> 
                <div x-id="q3toggle3" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q3toggle1').checked = false; $component('q3toggle2').checked = false; $component('q3toggle4').checked = false; $component('q3toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Average</span>
                </div> 
                <div x-id="q3toggle4" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q3toggle1').checked = false; $component('q3toggle2').checked = false; $component('q3toggle3').checked = false; $component('q3toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Low</span>
                </div> 
                <div x-id="q3toggle5" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q3toggle1').checked = false; $component('q3toggle2').checked = false; $component('q3toggle3').checked = false; $component('q3toggle4').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Very Low</span>
                </div> 
            </div>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-3 mt-5 lg:mt-3">
            <p class="w-full text-lime-900"><span class=" mr-5">4.</span>I would rate the overall value of the class session as:</p>
        </div>
        <div class="col-span-5 sm:col-span-5 lg:col-span-1 my-3 lg:my-0 sm:my-3 text-center lg:text-left">  
            {{-- grid work around for svg animations --}}
            <div  class="grid grid-cols-6 lg:grid-cols-5 px-0 gap-2 lg:gap-0 lg:px-10 pt-2 lg:pt-5">
                <div x-id="q4toggle1" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div> 
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q4toggle2').checked = false; $component('q4toggle3').checked = false; $component('q4toggle4').checked = false; $component('q4toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Very High</span>
                </div> 
                <div x-id="q4toggle2" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q4toggle1').checked = false; $component('q4toggle3').checked = false; $component('q4toggle4').checked = false; $component('q4toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">High</span>
                </div> 
                <div x-id="q4toggle3" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q4toggle1').checked = false; $component('q4toggle2').checked = false; $component('q4toggle4').checked = false; $component('q4toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Average</span>
                </div> 
                <div x-id="q4toggle4" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q4toggle1').checked = false; $component('q4toggle2').checked = false; $component('q4toggle3').checked = false; $component('q4toggle5').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Low</span>
                </div> 
                <div x-id="q4toggle5" x-data="{checked: false}" class="grid grid-cols-10 col-span-3 lg:col-span-1">
                    <div>
                        <label class="checkbox bounce inline-block">
                            <input x-bind:checked="checked" type="checkbox" class="cursor-pointer">
                            <svg viewBox="0 0 21 21">
                                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
                            </svg>
                        </label>
                    </div>
                    <span @click="checked == true ? checked = false : checked = true; $component('q4toggle1').checked = false; $component('q4toggle2').checked = false; $component('q4toggle3').checked = false; $component('q4toggle4').checked = false" class=" cursor-pointer absolute text-base leading-6 text-lime-900 inline-block pl-6 -mt-0.5">Very Low</span>
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
        <div class="col-span-5 mb-3 mt-6 lg:mt-5">
            <textarea style="box-sizing: border-box;" class="w-full p-5 lg:w-full rounded text-lime-900 bg-gray-50 border border-gray-300 text-base focus:outline-none" name="" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="col-span-5 mb-3 mt-6 lg:mt-5 text-right">
            <button style="box-sizing: border-box;" type="button" class="inline-flex justify-center w-full lg:w-auto py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-lime-500 hover:bg-lime-600 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-lime-200">
                Submit Teacher Rating
            </button>
        </div>
    </div>
</div>
@endsection