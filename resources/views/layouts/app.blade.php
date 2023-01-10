@include('layouts.partials.header')

<div class="main-content">
    <!-- Top navbar -->

    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.footer')
