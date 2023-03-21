<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- CSS --}}
    @vite('resources/css/app.css')

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body class="mb-4">
    <header>
        <nav class="py-4 absolute z-10 w-full bg-blue">
            <div class="px-[39px] flex justify-between items-center">
                <div>
                    <a href="#" class="uppercase text-[15px] font-semibold text-white hover:text-opacity-[.65]">user profile</a>
                </div>
                <a href="#" class="flex items-center gap-2 text-white hover:text-opacity-[.65]">
                    <img src="{{ $user->avatar }}" alt="profile" class="w-[36px] h-[36px] rounded-full object-cover object-center">
                    <span class="text-sm font-semibold ">{{ $user->name }}</span>
                </a href="#">
            </div>
        </nav>
    </header>
    <section>
        <div class="relative h-[600px] flex -z-10">
            <div class="pt-44 px-[39px] relative z-10 text-white w-5/12">
                <h1 class="text-[44px] font-semibold mb-2 whitespace-nowrap">Hello, {{ $user->name }}</h1>
                <p class="font-light leading-[1.7] mb-12">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
                <a href="#" class="py-[10px] px-[20px] bg-[#11cdef] rounded-md capitalize">edit profile</a>
            </div>
            <img class="absolute inset-0 h-full w-full object-cover object-top" src="{{ $user->cover }}" alt=""/>
            <div class="absolute inset-0 overlay-gradient opacity-90"></div>

        </div>
    </section>



    <main class="px-[39px] -mt-24 flex gap-8">
        <section class="w-4/12 relative">
            <div class="absolute w-full flex justify-center -mt-[45px]">
                <img src="{{ $user->avatar }}" alt="" class="h-[180px] w-[180px] object-cover rounded-full">
            </div>
            <div class="p-6 flex justify-between bg-white rounded-t-md">
                <a href="#" class="bg-[#11cdef] border-[#5e72e4] px-2.5 py-1.5 text-xs rounded-md text-white font-semibold capitalize">connect</a href="#">
                <a href="#" class="bg-[#172b4d] border-[#5e72e4] px-2.5 py-1.5 text-xs rounded-md text-white font-semibold capitalize">message</a href="#">
            </div>

            <div class="p-6 bg-white rounded-b-md">
                <div class="mt-24 flex justify-center py-4">
                    <div class="px-6 text-center">
                        <h5 class="text-lg font-bold text-[#525f7f]">22</h5>
                        <span class="capitalize text-[#adb5bd] text-sm">friends</span>
                    </div>
                    <div class="px-6 text-center flex-column">
                        <h5 class="text-lg font-bold text-[#525f7f]">10</h5>
                        <span class="capitalize text-[#adb5bd] text-sm">photo</span>
                    </div>
                    <div class="px-6 text-center flex-column">
                        <h5 class="text-lg font-bold text-[#525f7f]">89</h5>
                        <span class="capitalize text-[#adb5bd] text-sm">comments</span>
                    </div>
                </div>
                <div class="text-center mb-2">
                    <h4 class="font-semibold text-[#32325d]">{{ $user->name }}, <span class="font-light">{{ $age }}</span></h4>
                </div>
                <div class="text-center">
                    <h5 class="text-sm font-light text-[#32325d] mb-2">{{ $user->city == null ? "" : $user->city.', '.$user->country  }}</h5>
                </div>
                <div class="text-center mt-6 mb-2">
                    <h4 class="text-[13px] text-[#32325d] font-semibold leading[1.5]">Solution Managger - Creative Tim Officer</h4>
                </div>
                <div class="text-center">
                    <h5 class="text-[#525f7f] font-b">University of Computer Science</h5>
                </div>
    
                <hr class="my-6">
    
                <div class="text-center mb-4">
                    <p class="font-light leading-[1.7]">
                        Ryan — the name taken by Melbourne-raised, <br>
                        Brooklyn-based Nick Murphy — writes, performs and <br>
                        records all of his own music.
                    </p>
                </div>
                <div class="text-center">
                    <a href="#" class="capitalize text-[#5e72e4]">show more</a>
                </div>
            </div>
        </section>
        
        <section class="bg-white w-8/12 rounded-md  shadow-md">
            <div class="flex justify-between py-5 px-6">
                <h3 class="text-base font-semibold">My Account</h3>
                <a href="#" class="bg-[#5e72e4] border-[#5e72e4] px-2.5 py-1.5 text-xs rounded-md text-white font-semibold">Settings</a href="#">
            </div>
            {{-- <div class="bg-[#F7FAFC] px-6 py-5"> --}}
            <div class="bg-[#F7FAFC] px-6 py-5 rounded-b-md">
                <h4 class="uppercase text-xs tracking-[.04em] font-semibold py-1 mb-6 text-[#8898AA]">user information</h4>
                <div class="flex gap-8 mt-6 px-4">
                    <div class="w-1/2">
                        <label for="username" class="font-semibold text-[#525f7f] text-sm capitalize">username</label>
                        <input id="username" name="username" type="text" placeholder="" class="block w-full px-3 py-[10px] mt-2 drop-shadow-md rounded-md">
                    </div>
                    <div class="w-1/2">
                        <label for="email" class="font-semibold text-[#525f7f] text-sm capitalize">email address</label>
                        <input id="email" name="email" type="text" class="block w-full px-3 py-[10px] mt-2 drop-shadow-md rounded-md">
                    </div>
                </div>
                <div class="flex gap-8 mt-6 px-4">
                    <div class="w-1/2">
                        <label for="first_name" class="font-semibold text-[#525f7f] text-sm capitalize">first name</label>
                        <input id="first_name" name="first_name" type="text" placeholder="first name" class="block w-full px-3 py-[10px] mt-2 drop-shadow-md rounded-md">
                    </div>
                    <div class="w-1/2">
                        <label for="last_name" class="font-semibold text-[#525f7f] text-sm capitalize">last name</label>
                        <input id="last_name" name="last_name" type="text" class="block w-full px-3 py-[10px] mt-2 drop-shadow-md rounded-md">
                    </div>
                </div>

                <hr class="my-8">

                <h4 class="uppercase text-xs tracking-[.04em] font-semibold py-1 mb-6 text-[#8898AA]">user information</h4>
                <div class="flex gap-8 mt-6 px-4">
                    <div class="w-full">
                        <label for="address" class="font-semibold text-[#525f7f] text-sm capitalize">address</label>
                        <input id="address" name="address" type="text" class="block w-full px-3 py-[10px] mt-2 drop-shadow-md rounded-md">
                    </div>
                </div>
                <div class="flex gap-8 mt-6 px-4">
                    <div class="w-4/12">
                        <label for="city" class="font-semibold text-[#525f7f] text-sm capitalize">city</label>
                        <input id="city" name="city" type="text" class="block w-full px-3 py-[10px] mt-2 drop-shadow-md rounded-md">
                    </div>
                    <div class="w-4/12">
                        <label for="country" class="font-semibold text-[#525f7f] text-sm capitalize">country</label>
                        <input id="country" name="country" type="text" class="block w-full px-3 py-[10px] mt-2 drop-shadow-md rounded-md">
                    </div>
                    <div class="w-4/12">
                        <label for="postal_code" class="font-semibold text-[#525f7f] text-sm capitalize">postal code</label>
                        <input id="postal_code" name="postal_code" type="text" class="block w-full px-3 py-[10px] mt-2 drop-shadow-md rounded-md">
                    </div>
                </div>

                <hr class="my-8">

                <h4 class="uppercase text-xs tracking-[.04em] font-semibold py-1 mb-6 text-[#8898AA]">about me</h4>
                <div class="flex gap-8 mt-6 px-4">
                    <div class="w-full">
                        <label for="about_me" class="font-semibold text-[#525f7f] text-sm capitalize">about me</label>
                        <textarea name="about_me" id="about_me" rows="4" class="block w-full px-3 py-[10px] mt-2 drop-shadow-md rounded-md mb-6"></textarea>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>