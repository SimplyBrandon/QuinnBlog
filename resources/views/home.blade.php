@extends('layouts.base')
@section('page_title', 'Home')

@section('content')
    <div class="page-container flex">
        <div class="app-container flex flex-col flex-grow overflow-hidden">
            <div class="flex items-center justify-between h-screen bg-cover px-10" data-parallax="scroll" data-image-src="{{  asset('img/hero_bg.jpg') }}">
                <div class="flex flex-col items-center">
                    <p class="border-b-4 border-gray-600 text-4xl font-bold mb-2">01</p>
                    <p class="text-2xl">03</p>
                </div>
                <div class="flex-grow px-10 flex items-center justify-center self-end mx-32">
                    <img style="height: 70vh; width: 650px" src="{{  asset('img/holding-phone.png') }}"/>
                    <div style="height: 70vh" class="ml-16 pt-16">
                        <h3 class="font-light text-4xl text-white mb-5">Figma is awesome</h3>
                        <h1 class="hero-text font-bold text-white text-7xl w-3/6 leading-none tracking-wide font-catamaran">But sorry my dearly beloved</h1>
                        <div class="flex items-center mt-64 w-1/3">
                            <div class="h-1 w-1/3 bg-white shadow-md"></div>
                            <div class="h-1 w-1/3 bg-gray-500"></div>
                            <div class="h-1 w-1/3 bg-gray-500"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center px-10 py-3 border-solid border-1 border-transparent cursor-pointer transition ease duration-200 hover:text-white hover:border-white">
                    <p class="mr-2 font-bold">Next</p><i class="fa fa-arrow-right"></i>
                </div>
            </div>
            <div class="relative rounded-full circle-balloon border border-10 border-white shadow-xl"></div>
            <div class="app-content mt-32 mb-16 pb-16 px-64">
                <ul class="flex items-center justify-center list-none">
                    <li class="text-4xl font-black text-blue-600 mr-10">All</li>
                    <li class="text-4xl mr-10">Branding</li>
                    <li class="text-4xl mr-10">UI/UX</li>
                </ul>
                <div class="masonry mt-16">
                    <div class="masonry-item">
                        <div class="flex flex-col m-8 bg-cover h-full box-border bg-center rounded-md shadow-darken opacity-75 cursor-pointer transition ease duration-200 hover:opacity-100" style="background-image: url('{{  asset('img/blog_thumbnails/post-1185181.jpg') }}')">
                            <div class="mt-auto py-8 px-10">
                                <h2 class="w-5/6 text-white text-1xl font-bold tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                <hr class="w-1/12 my-4 border-2">
                                <p class="text-gray-300 text-opacity-100 font-light text-lg leading-relaxed mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                <a class="underline text-gray-200 text-opacity-100" href="#">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item">
                        <div class="flex flex-col m-8 bg-cover h-full box-border bg-center rounded-md shadow-darken opacity-75 cursor-pointer transition ease duration-200 hover:opacity-100" style="background-image: url('{{  asset('img/blog_thumbnails/post-1185181.jpg') }}')">
                            <div class="mt-auto py-8 px-10">
                                <h2 class="w-5/6 text-white text-1xl font-bold tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                <hr class="w-1/12 my-4 border-2">
                                <p class="text-gray-300 text-opacity-100 font-light text-lg leading-relaxed mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                <a class="underline text-gray-200 text-opacity-100" href="#">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item">
                        <div class="flex flex-col m-8 bg-cover h-full box-border bg-center rounded-md shadow-darken opacity-75 cursor-pointer transition ease duration-200 hover:opacity-100" style="background-image: url('{{  asset('img/blog_thumbnails/post-1185181.jpg') }}')">
                            <div class="mt-auto py-8 px-10">
                                <h2 class="w-5/6 text-white text-1xl font-bold tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                <hr class="w-1/12 my-4 border-2">
                                <p class="text-gray-300 text-opacity-100 font-light text-lg leading-relaxed mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                <a class="underline text-gray-200 text-opacity-100" href="#">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item">
                        <div class="flex flex-col m-8 bg-cover h-full box-border bg-center rounded-md shadow-darken opacity-75 cursor-pointer transition ease duration-200 hover:opacity-100" style="background-image: url('{{  asset('img/blog_thumbnails/post-1185181.jpg') }}')">
                            <div class="mt-auto py-8 px-10">
                                <h2 class="w-5/6 text-white text-1xl font-bold tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                <hr class="w-1/12 my-4 border-2">
                                <p class="text-gray-300 text-opacity-100 font-light text-lg leading-relaxed mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                <a class="underline text-gray-200 text-opacity-100" href="#">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item">
                        <div class="flex flex-col m-8 bg-cover h-full box-border bg-center rounded-md shadow-darken opacity-75 cursor-pointer transition ease duration-200 hover:opacity-100" style="background-image: url('{{  asset('img/blog_thumbnails/post-1185181.jpg') }}')">
                            <div class="mt-auto py-8 px-10">
                                <h2 class="w-5/6 text-white text-1xl font-bold tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                <hr class="w-1/12 my-4 border-2">
                                <p class="text-gray-300 text-opacity-100 font-light text-lg leading-relaxed mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                <a class="underline text-gray-200 text-opacity-100" href="#">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item">
                        <div class="flex flex-col m-8 bg-cover h-full box-border bg-center rounded-md shadow-darken opacity-75 cursor-pointer transition ease duration-200 hover:opacity-100" style="background-image: url('{{  asset('img/blog_thumbnails/post-1185181.jpg') }}')">
                            <div class="mt-auto py-8 px-10">
                                <h2 class="w-5/6 text-white text-1xl font-bold tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                <hr class="w-1/12 my-4 border-2">
                                <p class="text-gray-300 text-opacity-100 font-light text-lg leading-relaxed mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                <a class="underline text-gray-200 text-opacity-100" href="#">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item">
                        <div class="flex flex-col m-8 bg-cover h-full box-border bg-center rounded-md shadow-darken opacity-75 cursor-pointer transition ease duration-200 hover:opacity-100" style="background-image: url('{{  asset('img/blog_thumbnails/post-1185181.jpg') }}')">
                            <div class="mt-auto py-8 px-10">
                                <h2 class="w-5/6 text-white text-1xl font-bold tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                <hr class="w-1/12 my-4 border-2">
                                <p class="text-gray-300 text-opacity-100 font-light text-lg leading-relaxed mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                <a class="underline text-gray-200 text-opacity-100" href="#">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item">
                        <div class="flex flex-col m-8 bg-cover h-full box-border bg-center rounded-md shadow-darken opacity-75 cursor-pointer transition ease duration-200 hover:opacity-100" style="background-image: url('{{  asset('img/blog_thumbnails/post-1185181.jpg') }}')">
                            <div class="mt-auto py-8 px-10">
                                <h2 class="w-5/6 text-white text-1xl font-bold tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                <hr class="w-1/12 my-4 border-2">
                                <p class="text-gray-300 text-opacity-100 font-light text-lg leading-relaxed mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                <a class="underline text-gray-200 text-opacity-100" href="#">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item">
                        <div class="flex flex-col m-8 bg-cover h-full box-border bg-center rounded-md shadow-darken opacity-75 cursor-pointer transition ease duration-200 hover:opacity-100" style="background-image: url('{{  asset('img/blog_thumbnails/post-1185181.jpg') }}')">
                            <div class="mt-auto py-8 px-10">
                                <h2 class="w-5/6 text-white text-1xl font-bold tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                                <hr class="w-1/12 my-4 border-2">
                                <p class="text-gray-300 text-opacity-100 font-light text-lg leading-relaxed mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                <a class="underline text-gray-200 text-opacity-100" href="#">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.sidebar_nav')
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{  asset('js/parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('js/masonry.js') }}"></script>
@endsection