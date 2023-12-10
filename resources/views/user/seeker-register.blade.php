@extends('layouts.app')
@section('content')
<div class="flex h-screen justify-between">
    <div class="bg-gradient-to-r from-violet-500 to-fuchsia-300 w-1/2 text-black text-lg font-normal flex flex-col justify-center px-16 py-12">
        <p class="text-center text-lg leading-9 tracking-tight">Looking for a job?</p>
          <h2 class="text-center text-2xl font-bold leading-9 tracking-tight">Please Create an account</h2>
        <img class="rounded-lg" src="{{ asset('image/registration.jpg')}}" alt="">
    </div>
    <div class="w-1/2 flex flex-col justify-center px-16">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto w-auto" src="{{asset('image/JobPortal.png')}}" alt="">
        </div>
        <div class=" sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="{{route('store.seeker')}}" method="POST">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Full Name</label>
                <div class="mt-2">
                  <input name="name" type="text" required class="block px-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @if ($errors->has('name'))
                        <span class="text-red-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>
              </div>
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block px-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @if ($errors->has('email'))
                    <span class="text-red-500">{{ $errors->first('email') }}</span>
                @endif
            </div>
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block px-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @if ($errors->has('password'))
                    <span class="text-red-500">{{ $errors->first('password') }}</span>
                @endif
              </div>
            </div>

            {{-- <div>
                <div class="flex items-center justify-between">
                  <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                </div>
                <div class="mt-2">
                  <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="block px-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
            <div> --}}
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Signup</button>
            </div>
          </form>
        </div>
      </div>
</div>
@endsection

