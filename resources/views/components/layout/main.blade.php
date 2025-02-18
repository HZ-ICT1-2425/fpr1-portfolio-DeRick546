<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/sword.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href='{{asset('css/main.css')}}'>
    <title>HZ HBO-ICT_Portfolio</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- Render additional styles from subviews and/or components --}}
    @stack('styles')
</head>
<body>
{{-- Navigation bar --}}
<x-ui.navbar>
    <x:slot:brand>
        <a href="/" class="navbar-item">
            <i class="fa-solid fa-list-check"></i>&nbsp;TaskITEasy
        </a>
    </x:slot:brand>

    @foreach($navItems as $navItem)
        <x-ui.navbar-item :route="$navItem['route']">{{ $navItem['title'] }}</x-ui.navbar-item>
    @endforeach
</x-ui.navbar>
<footer class="footer">
    <div class="container">
        <div class="column has-text-centered">
            @foreach($navItems as $navItem)
                @if(request()->routeIs($navItem['route']))
                    <h2 class="title is-1">{{ $navItem['title'] }}</h2>
                @endif
            @endforeach
        </div>
    </div>
</footer>
{{-- Content --}}
<section class="section">
    <div class="container">
        <x-ui.notifications></x-ui.notifications>
        {{ $slot }}
    </div>
</section>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column has-text-centered">
                <div>
                    <a href="/" class="link">Home</a>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <a href="https://opensource.org/licenses/MIT" class="link" target="_blank">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://www.csrhymes.com" target="_blank">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard" target="_blank">BugSlayer</a> | rebuild by <a href="https://github.com/DeRick546" target="_blank">DeRick546</a></p>
            <p class="">contact info<svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="none" viewBox="0 -5 15 26">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 14-4-4m4 4 4-4"/>
                </svg></p>
            <p><a href="https://hz.nl/" target="blank">hz</a> |
            <a href="https://learn.hz.nl/my/" target="blank">hz-learn</a> |
            <a href="https://github.com/DeRick546/DeRick546" target="blank">Mijn github account</a></p>
        </div>
    </div>
</footer>
{{-- Render additional scripts from subviews and/or components --}}
@stack('scripts')
</body>
</html>
