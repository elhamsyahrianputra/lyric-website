@extends('layouts.auth')

@push('style')

@endpush

@section('content')
<main>
    <section class="lg:mt-20 mt-10 lg:pl-8">

        <div>
            <h4 class="text-lake-100 font-medium lg:mb-4 max-sm:text-xs">START FOR FREE</h4>
            <h2 class="lg:text-5xl text-2xl font-semibold mb-6">Create new account<span class="text-accent text-5xl">.</span></h2>
        </div>

        <form action="/signup" method="post">
            @csrf
            <div class="w-full lg:w-4/12 flex flex-col gap-y-4">
                <div class="relative">
                    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" class="bg-lake-400 font-semibold px-4 py-3 rounded-xl w-full focus:outline focus:outline-accent focus:outline-2 focus:ring-4 focus:ring-accent-light/10 @error('email') ring-2 ring-negative-dark @enderror" autofocus autocomplete="off">
                    <i class="fa-solid fa-clipboard-user absolute top-1/2 -translate-y-1/2 right-4"></i>
                </div>
                @error('email')
                <span class="-mt-3">{{ $message }}</span>
                @enderror

                <div class="relative">
                    <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" class="bg-lake-400 font-semibold px-4 py-3 rounded-xl w-full focus:outline focus:outline-accent focus:outline-2 focus:ring-4 focus:ring-accent-light/10 @error('email') ring-2 ring-negative-dark @enderror" autocomplete="off">
                    <i class="fa-solid fa-envelope absolute top-1/2 -translate-y-1/2 right-4"></i>
                </div>
                @error('email')
                <span class="-mt-3">{{ $message }}</span>
                @enderror
                
                <div class="relative">
                    <input type="text" placeholder="Username" name="username" value="{{ old('username') }}" class="bg-lake-400 font-semibold px-4 py-3 rounded-xl w-full focus:outline focus:outline-accent focus:outline-2 focus:ring-4 focus:ring-accent-light/10 @error('username') ring-2 ring-negative-dark @enderror" autocomplete="off">
                    <i class="fa-solid fa-user absolute top-1/2 -translate-y-1/2 right-4"></i>
                </div>
                @error('username')
                    <span class="-mt-3">{{ $message }}</span>
                @enderror

                <div class="relative">
                    <input type="password" placeholder="Password" name="password" value="{{ old('') }}" class="bg-lake-400 font-semibold px-4 py-3 rounded-xl w-full focus:outline focus:outline-accent focus:outline-2 focus:ring-4 focus:ring-accent-light/10 @error('password') ring-2 ring-negative-dark @enderror" autocomplete="off">
                    <i class="fa-solid fa-lock absolute top-1/2 -translate-y-1/2 right-4"></i>
                </div>
                @error('password')
                    <span class="-mt-3">{{ $message }}</span>
                @enderror

            </div>
            <div class="mt-8 max-sm:text-right">
                <button type="submit" class="bg-accent px-6 py-2 rounded-xl">Create Account</button>
            </div>
        </form>
    </section>
    <section>
        
    </section>
</main>
@endsection

@push('script')
    
@endpush