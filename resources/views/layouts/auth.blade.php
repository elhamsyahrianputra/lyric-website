<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Header --}}
    @include('partials.auth.header')

    {{-- Style --}}
    @stack('style')
</head>
<body class="bg-gradient-to-r from-lake-800 to-lake-200 text-white lg:px-16 px-8">
    {{-- Navbar --}}
    @include('partials.auth.navbar')

    {{-- Main Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('partials.auth.footer')

    {{-- Script --}}
    @stack('script')
</body>
</html>