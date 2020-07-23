@extends('layouts.base')

@section('page_title', 'Login')

@section('content')
<div class="page-container flex">
    <div class="app-container flex flex-col flex-grow overflow-hidden">
        <div class="flex items-center justify-center h-screen bg-cover px-10" style="background-image: url('{{  asset('img/hero_bg.jpg') }}')">
            <div class="p-10 w-2/5 bg-white shadow-2xl rounded-lg flex justify-center flex-col">
                <h2 class="font-bold text-2xl text-center mb-10">Member Login</h2>
                <form method="POST" class="flex flex-col px-10" action="{{  route('login') }}">
                    <input class="w-full text-center py-3 px-5 border-b-2 mb-5 outline-none border-gray-200" type="email" name="email" placeholder="E-Mail Address...">
                    @csrf
                    <input class="w-full text-center py-3 px-5 border-b-2 outline-none border-gray-200" type="password" name="password" placeholder="Password...">
                    <button class="bg-green-400 rounded-lg p-3 mt-10 text-white font-bold transition ease duration-200 outline-none hover:bg-green-500" type="submit"><i class="fa fa-arrow-right mr-5"></i> Log in</button>
                </form>
            </div>
        </div>
    </div>
    @include('partials.sidebar_nav')
</div>
@endsection
