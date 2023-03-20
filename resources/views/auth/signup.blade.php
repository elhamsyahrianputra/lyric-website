<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/fe578257ce.js" crossorigin="anonymous"></script>

    {{-- TailwindCSS --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-lake-800 to-lake-200 text-white lg:px-16 px-8">
    <header>
        <div class="flex justify-between items-center py-6">
            <div>
                <a href="/" class="font-semibold ">LYRIC WEBSITE</a>
            </div>
            <nav>
                <div class="flex font-semibold">
                    <button class="px-6 py-2 rounded-xl">Sign Up</button>
                    <a href="/login" class="bg-accent px-6 py-2 rounded-xl">Log In</a>
                </div>
            </nav>
        </div>
    </header>

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
                        <input type="text" placeholder="Username" name="username" value="{{ old('username') }}" class="bg-lake-400 font-semibold px-4 py-3 rounded-xl w-full focus:outline focus:outline-accent focus:outline-2 focus:ring-4 focus:ring-accent-light/10 @error('username') ring-2 ring-negative-dark @enderror" autofocus autocomplete="off">
                        <i class="fa-solid fa-user absolute top-1/2 -translate-y-1/2 right-4"></i>
                    </div>
                    @error('username')
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

    <footer></footer>
</body>
</html>