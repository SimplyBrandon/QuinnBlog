<div id="site_navigation" class="fixed top-0 right-0 bottom-0 z-50 flex-col h-full flex bg-white">
    <h2 style="height: 102px" class="flex items-center py-8 px-10 border-b-2 border-gray-200 box-border">Navigation</h2>
    <ul class="flex flex-col list-none p-0 m-0">
        <li class="px-10 py-4 border-b-2 border-gray-200 cursor-pointer font-bold underline"><i class="w-5 fa fa-home mr-5"></i> Home</li>
        <li class="px-10 py-4 border-b-2 border-gray-300 cursor-pointer bg-gray-200 text-gray-500 transition ease duration-200 hover:bg-white hover:text-black"><i class="w-5 fa fa-address-card mr-5"></i> About Us</li>
        <li class="px-10 py-4 border-b-2 border-gray-300 cursor-pointer bg-gray-200 text-gray-500 transition ease duration-200 hover:bg-white hover:text-black"><i class="w-5 fa fa-envelope mr-5"></i> Contact Us</li>
    </ul>
    @if(Auth::check())
        <div class="mt-auto px-10 py-4 bg-gray-100">
            <p>Logged in as <a class="font-bold" href="#">{{  Auth::user()->name }}</a></p>
            <div class="mt-5 flex items-center">
                <img class="h-12 w-12 mr-5 rounded-lg" src="{{  asset('img/' . Auth::user()->profile_icon) }}"/>
                <div class="flex items-center flex-grow">
                    <a class="h-12 w-1/3 flex items-center justify-center p-5 bg-gray-300 rounded-tl-lg rounded-bl-lg mr-1" href="#"><i class="fa fa-cogs"></i></a>
                    <a class="h-12 w-1/3 flex items-center justify-center p-5 bg-gray-300 mr-1" href="#"><i class="fas fa-tachometer-alt"></i></a>
                    <a class="h-12 w-1/3 flex items-center justify-center p-5 bg-gray-300 rounded-tr-lg rounded-br-lg" href="{{  route('logout') }}"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>
        </div>
    @else
        <a class="mt-auto px-10 py-4 text-white bg-black" href="{{ route('login') }}"><i class="fa fa-user-secret mr-5 w-5"></i> Log in</a>
    @endif
</div>