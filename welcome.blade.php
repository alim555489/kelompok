<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('css/barfiller.css')}}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('css/elegant-icons.css')}}"> 
        <link rel="stylesheet" href="{{ asset ('css/nice-select.css')}}"> 
        <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css')}}"> 
        <link rel="stylesheet" href="{{ asset ('css/slicknav.min.css')}}"> 
        <link rel="stylesheet" href="{{ asset ('css/style.css')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Js Plugins -->
        <script src="{{ asset ('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset ('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset ('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset ('js/jquery.barfiller.js')}}"></script>
        <script src="{{ asset ('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset ('js/jquery.slicknav.js')}}"></script>
        <script src="{{ asset ('js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset ('js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{ asset ('js/main.js')}}"></script>   
        
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>
                        @endif

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
                    
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
