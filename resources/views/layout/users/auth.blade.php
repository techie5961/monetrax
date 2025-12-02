<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png?v=1.1') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg?v=1.1') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico?v=1.1') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png?v=1.1') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest?v=1.1') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Users | @yield('title')</title>
    <style>
        :root{
            --text:black;
        }
       
     
    </style>
    @yield('css')
</head>

<body class="overflow-hidden">
    <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
  <svg fill="currentColor" width="100" height="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_g88x" begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="0;spinner_yOmw.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_yOmw" begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_g88x.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path></svg>
</div>
   <header>

    </header>
    <main>
        @yield('main')

    </main>
   <footer class="w-full pc-align-center pc-place-center pc-grid pc-grid-2 c-white bg p-10 column g-10">
   <img src="{{ asset('favicon/logo-white.png?v=1.1') }}" alt="" class="grid-full w-100 pc-m-x-auto">
   <span class="font-1 grid-full">Your daily companion for earning opportunities. Transform your smartphone into an income generator with our innovative platform.

</span>
 <div class="column g-5">
    <strong class="font-1 u">Company</strong>
 <a href="{{ url('about') }}" class="no-u c-white">About Us</a>
 <a href="{{ url('vendors') }}" class="no-u c-white">Vendors</a>
 <a href="{{ url('terms') }}" class="no-u c-white">Terms of Service</a>
 <a href="{{ url('package/list') }}" class="no-u c-white">Packages</a>
 </div>
<div class="column g-5">
     <strong class="font-1 u">My Account</strong>
 <a href="{{ url('login') }}" class="no-u c-white">Login</a>
 <a href="{{ url('register') }}" class="no-u c-white">SignUp</a>
</div>
 <hr class="bg-white grid-full">
 <div class="w-full align-center grid-full text-center column justify-center">
    <span>&copy;2025 {{ config('app.name') }}.</span>
     <span>Built & Designed by <a class="c-gold" href="https://wa.me/+2349013350351">Techie Innovations</a></span>
 </div>
</footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script class="js">
       window.addEventListener('load',()=>{
             document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
       
        });
    </script>
    @yield('js')
</body>
</html>