<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/icon.png')}}" type="image/x-icon">
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
    <x:slot:brand></x:slot:brand>
    @foreach($navItems as $navItem)
        <x-ui.navbar-item :route="$navItem['route']">{{ $navItem['title'] }}</x-ui.navbar-item>
    @endforeach
</x-ui.navbar>
<br>
<footer class="footer">
    <a href="{{ url()->previous() }}" class="button is-info" style="position: fixed; z-index: 190; color: white!important"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
        </svg>Back</a>
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
<aside id="sidebar" class="sidebar">
    <br>
    <br>
    <a href="javascript:void(0)" class="close-btn" onclick="toggleSidebar()">&times;</a>
    <a href="https://hz.osiris-student.nl/home" target="_blank">Hz-student</a>
    <a href="https://www.w3schools.com/" target="_blank">W3schools</a>
    <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/OER-HZ-Bacheloropleidingen-voltijd-2023-2024-DEF-versie-20240412.pdf" target="_blank">Onderwijs- en
        examenregeling HZ</a>
    <a href="https://github.com/HZ-HBO-ICT" target="blank">Github van HBO-ICT</a>
    <a href="https://hz.osiris-student.nl/voortgang" target="_blank" >Studie progress</a>
    <a href="https://laravel.com/docs/11.x/readme" target="_blank" >Laravel documentation</a>
</aside>
<script>
    let active = 0;
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.querySelector(".main-content");
        active = active + 1;
        // Toggle the open class for the sidebar
        sidebar.classList.toggle("open");
        if(active % 2){
            document.getElementById("buttonAsideMenu").innerHTML = "Close menu";

        }else{
            document.getElementById("buttonAsideMenu").innerHTML = "Open menu";
        }
        // Toggle the shift class for the main content
        mainContent.classList.toggle("shift");
        console.log(active);
    }
</script>
<div class="main-content">
    <button id="buttonAsideMenu"  class="button is-primary" onclick="toggleSidebar()">Open menu</button>
</div>
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
