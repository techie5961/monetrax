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
        --primary-brighter:aqua;
        --primary-bright:blue;
        --gradient:linear-gradient(to right,aqua,blue);
        --gradient-text:white;
      
      }
      .nav-profile{
        background-color: var(--bg);
background-color: #cccccc;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 1200'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='0' y2='100%25' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23f5f5f5'/%3E%3Cstop offset='0.02' stop-color='%23cccccc'/%3E%3Cstop offset='0.02' stop-color='%23c3c3c3'/%3E%3Cstop offset='0.032' stop-color='%23cccccc'/%3E%3Cstop offset='0.032' stop-color='%23bbbbbb'/%3E%3Cstop offset='0.056' stop-color='%23cccccc'/%3E%3Cstop offset='0.056' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.07' stop-color='%23cccccc'/%3E%3Cstop offset='0.07' stop-color='%23a0a0a0'/%3E%3Cstop offset='0.1' stop-color='%23cccccc'/%3E%3Cstop offset='0.1' stop-color='%23e7e7e7'/%3E%3Cstop offset='0.126' stop-color='%23cccccc'/%3E%3Cstop offset='0.126' stop-color='%23bababa'/%3E%3Cstop offset='0.142' stop-color='%23cccccc'/%3E%3Cstop offset='0.142' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.159' stop-color='%23cccccc'/%3E%3Cstop offset='0.159' stop-color='%23b0b0b0'/%3E%3Cstop offset='0.17' stop-color='%23cccccc'/%3E%3Cstop offset='0.17' stop-color='%23cdcdcd'/%3E%3Cstop offset='0.197' stop-color='%23cccccc'/%3E%3Cstop offset='0.197' stop-color='%23b5b5b5'/%3E%3Cstop offset='0.218' stop-color='%23cccccc'/%3E%3Cstop offset='0.218' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.239' stop-color='%23cccccc'/%3E%3Cstop offset='0.239' stop-color='%23cecece'/%3E%3Cstop offset='0.254' stop-color='%23cccccc'/%3E%3Cstop offset='0.254' stop-color='%23cecece'/%3E%3Cstop offset='0.283' stop-color='%23cccccc'/%3E%3Cstop offset='0.283' stop-color='%23cccccc'/%3E%3Cstop offset='0.294' stop-color='%23cccccc'/%3E%3Cstop offset='0.294' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.305' stop-color='%23cccccc'/%3E%3Cstop offset='0.305' stop-color='%234e4e4e'/%3E%3Cstop offset='0.332' stop-color='%23cccccc'/%3E%3Cstop offset='0.332' stop-color='%23909090'/%3E%3Cstop offset='0.346' stop-color='%23cccccc'/%3E%3Cstop offset='0.346' stop-color='%23c5c5c5'/%3E%3Cstop offset='0.362' stop-color='%23cccccc'/%3E%3Cstop offset='0.362' stop-color='%23979797'/%3E%3Cstop offset='0.381' stop-color='%23cccccc'/%3E%3Cstop offset='0.381' stop-color='%23c2c2c2'/%3E%3Cstop offset='0.415' stop-color='%23cccccc'/%3E%3Cstop offset='0.415' stop-color='%23a8a8a8'/%3E%3Cstop offset='0.428' stop-color='%23cccccc'/%3E%3Cstop offset='0.428' stop-color='%23525252'/%3E%3Cstop offset='0.442' stop-color='%23cccccc'/%3E%3Cstop offset='0.442' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.456' stop-color='%23cccccc'/%3E%3Cstop offset='0.456' stop-color='%23a9a9a9'/%3E%3Cstop offset='0.498' stop-color='%23cccccc'/%3E%3Cstop offset='0.498' stop-color='%23dfdfdf'/%3E%3Cstop offset='0.511' stop-color='%23cccccc'/%3E%3Cstop offset='0.511' stop-color='%23cecece'/%3E%3Cstop offset='0.532' stop-color='%23cccccc'/%3E%3Cstop offset='0.532' stop-color='%23cecece'/%3E%3Cstop offset='0.541' stop-color='%23cccccc'/%3E%3Cstop offset='0.541' stop-color='%23bababa'/%3E%3Cstop offset='0.56' stop-color='%23cccccc'/%3E%3Cstop offset='0.56' stop-color='%23f0f0f0'/%3E%3Cstop offset='0.581' stop-color='%23cccccc'/%3E%3Cstop offset='0.581' stop-color='%23aaaaaa'/%3E%3Cstop offset='0.6' stop-color='%23cccccc'/%3E%3Cstop offset='0.6' stop-color='%23d7d7d7'/%3E%3Cstop offset='0.618' stop-color='%23cccccc'/%3E%3Cstop offset='0.618' stop-color='%23cacaca'/%3E%3Cstop offset='0.656' stop-color='%23cccccc'/%3E%3Cstop offset='0.656' stop-color='%23cccccc'/%3E%3Cstop offset='0.679' stop-color='%23cccccc'/%3E%3Cstop offset='0.679' stop-color='%23ababab'/%3E%3Cstop offset='0.689' stop-color='%23cccccc'/%3E%3Cstop offset='0.689' stop-color='%23d1d1d1'/%3E%3Cstop offset='0.720' stop-color='%23cccccc'/%3E%3Cstop offset='0.720' stop-color='%23bbbbbb'/%3E%3Cstop offset='0.734' stop-color='%23cccccc'/%3E%3Cstop offset='0.734' stop-color='%23cbcbcb'/%3E%3Cstop offset='0.748' stop-color='%23cccccc'/%3E%3Cstop offset='0.748' stop-color='%236b6b6b'/%3E%3Cstop offset='0.764' stop-color='%23cccccc'/%3E%3Cstop offset='0.764' stop-color='%23989898'/%3E%3Cstop offset='0.788' stop-color='%23cccccc'/%3E%3Cstop offset='0.788' stop-color='%23dcdcdc'/%3E%3Cstop offset='0.808' stop-color='%23cccccc'/%3E%3Cstop offset='0.808' stop-color='%238f8f8f'/%3E%3Cstop offset='0.831' stop-color='%23cccccc'/%3E%3Cstop offset='0.831' stop-color='%23cbcbcb'/%3E%3Cstop offset='0.856' stop-color='%23cccccc'/%3E%3Cstop offset='0.856' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.872' stop-color='%23cccccc'/%3E%3Cstop offset='0.872' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.894' stop-color='%23cccccc'/%3E%3Cstop offset='0.894' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.914' stop-color='%23cccccc'/%3E%3Cstop offset='0.914' stop-color='%23c0c0c0'/%3E%3Cstop offset='0.942' stop-color='%23cccccc'/%3E%3Cstop offset='0.942' stop-color='%23cdcdcd'/%3E%3Cstop offset='0.957' stop-color='%23cccccc'/%3E%3Cstop offset='0.957' stop-color='%237f7f7f'/%3E%3Cstop offset='0.973' stop-color='%23cccccc'/%3E%3Cstop offset='0.973' stop-color='%23cdcdcd'/%3E%3Cstop offset='1' stop-color='%23cccccc'/%3E%3Cstop offset='1' stop-color='%23e6e6e6'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' x='0' y='0' width='100%25' height='100%25'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
color:black;
}
/* body{
  
   background-color: var(--bg);
  
 
} */
div.menu.active svg.menu.open{
    display:none;
}
  
div.menu svg.menu.close{
    display:none;
}
div.menu.active svg.menu.close{
    display:flex;
}
  body{
  background-color: var(--bg);
  color:var(--text);

  
  }
   .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
  .menu-icon{
    background:var(--gradient);
    color:var(--gradient-text);
  }
  header{
    position:fixed;
    top:0;
    left:0;
    right:0;
    padding:10px;
    display:flex;
    flex-direction:row;
    align-items:center;
    gap:10px;
    z-index:4000;
    backdrop-filter:blur(50px);
    -webkit-backdrop-filter:blur(50px);

  }
  .pc-footer-links{
    display:none !important;
  }
  .mobile-footer-links{
    display:flex;
    flex-direction:column;
  }
 
  footer{
    border-top:1px solid var(--bg-lighter);
  }
  .payment-patners{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:10px;
    place-items:center;
  
  }
  .patner{
    background:var(--bg-light);
    border-radius:5px;
    padding:10px;
    width:fit-content !important;
  }
  section.nav{
    display:none;
  }
section.nav.active{
  display:flex;
  animation:opaq-in 0.5s ease forwards;
}
@keyframes opaq-in{
  0%{
    opacity:0;
  }
  100%{
    opacity:1;
  }
}
.mobile-nav{
  backdrop-filter:blur(50px);
  -webkit-backdrop-filter:blur(50px);
  background:transparent;
}
.mobile-nav svg{
  height:20px;
  width:20px;

}
.pc-nav svg{
  height:20px;
  width:20px;

}

   @media(min-width:800px){
    .mobile-footer-links{
      display:none !important;
    }
    .pc-footer-links{
    display:grid !important;
    grid-template-columns: repeat(6,1fr);
    gap:10px;
    
  }

    .pc-footer-links a{
      padding:5px 20px;
      background:var(--bg-light) !important;
      border:1px solid var(--bg-lighter);
      display:flex;
      align-items:center;
      justify-content:center;
    

    }
    .payment-patners{
      padding-left:15vw;
      padding-right:15vw;
    }
    section.mobile-nav{
      display:none;
    }
   }
  
    
    </style>
    @yield('css')
</head>

<body class="overflow-hidden">
   <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
  <svg fill="currentColor" width="100" height="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_g88x" begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="0;spinner_yOmw.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_yOmw" begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_g88x.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path></svg>
</div>
 <header>
       
        <img  onclick="window.location.href='{{ url('/') }}'" src="{{ asset('favicon/logo.png?v=1.1') }}" alt="Logo" class="h-30 pc-pointer">
         <div onclick="
       if(document.querySelector('section.nav').classList.contains('active')){
     
        document.querySelector('section.nav').classList.remove('active');
        this.classList.remove('active');
         
       }else{
       
        document.querySelector('section.nav').classList.add('active');
        this.classList.add('active');
         
       }

            " class="h-40 m-left-auto menu-icon menu w-40 column pc-display-none justify-center circle p-10">
          
          <svg class="menu open" width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 7C3.25 6.58579 3.58579 6.25 4 6.25H20C20.4142 6.25 20.75 6.58579 20.75 7C20.75 7.41421 20.4142 7.75 20 7.75H4C3.58579 7.75 3.25 7.41421 3.25 7ZM3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12ZM3.25 17C3.25 16.5858 3.58579 16.25 4 16.25H9C9.41421 16.25 9.75 16.5858 9.75 17C9.75 17.4142 9.41421 17.75 9 17.75H4C3.58579 17.75 3.25 17.4142 3.25 17Z" fill="CurrentColor"></path>
</svg>
    <svg class="menu close" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z"></path></svg>

        </div>
       
        {{-- PC NAV --}}
    <div class="row pc-nav m-left-auto mobile-display-none align-center g-10">
        {{-- NEW NAV LINK --}}
            <a class="w-full clip-10 br-10 bold p-10 font-1 w-full g-5 row align-center no-u c-white" href="{{ url('/') }}">
             <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path d="M8.543 2.232a.75.75 0 0 0-1.085 0l-5.25 5.5A.75.75 0 0 0 2.75 9H4v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 1 1 2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V9h1.25a.75.75 0 0 0 .543-1.268l-5.25-5.5Z"></path>
</svg>


              <span class="m-top-auto">  Home</span>
            </a>
            {{-- NEW NAV LINK --}}
            <a href="{{ url('/about') }}" class="w-full clip-10 br-10 g-5 bold p-10 font-1 w-full row align-center no-u c-inherit">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0ZM9 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6.75 8a.75.75 0 0 0 0 1.5h.75v1.75a.75.75 0 0 0 1.5 0v-2.5A.75.75 0 0 0 8.25 8h-1.5Z" clip-rule="evenodd"></path>
</svg>


              <span class="m-top-auto"> About Us</span>
            </a>
            {{-- NEW NAV LINK --}}
             <a href="{{ url('/coupon/checker') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm3.844-8.791a.75.75 0 0 0-1.188-.918l-3.7 4.79-1.649-1.833a.75.75 0 1 0-1.114 1.004l2.25 2.5a.75.75 0 0 0 1.15-.043l4.25-5.5Z" clip-rule="evenodd"></path>
</svg>



              <span class="m-top-auto"> Coupon Checker</span>
            </a>
              <a href="{{ url('/terms') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M8.75 2.5a.75.75 0 0 0-1.5 0v.508a32.661 32.661 0 0 0-4.624.434.75.75 0 0 0 .246 1.48l.13-.021-1.188 4.75a.75.75 0 0 0 .33.817A3.487 3.487 0 0 0 4 11c.68 0 1.318-.195 1.856-.532a.75.75 0 0 0 .33-.818l-1.25-5a31.31 31.31 0 0 1 2.314-.141V12.012c-.882.027-1.752.104-2.607.226a.75.75 0 0 0 .213 1.485 22.188 22.188 0 0 1 6.288 0 .75.75 0 1 0 .213-1.485 23.657 23.657 0 0 0-2.607-.226V4.509c.779.018 1.55.066 2.314.14L9.814 9.65a.75.75 0 0 0 .329.818 3.487 3.487 0 0 0 1.856.532c.68 0 1.318-.195 1.856-.532a.75.75 0 0 0 .33-.818L12.997 4.9l.13.022a.75.75 0 1 0 .247-1.48 32.66 32.66 0 0 0-4.624-.434V2.5ZM3.42 9.415a2 2 0 0 0 1.16 0L4 7.092l-.58 2.323ZM12 9.5a2 2 0 0 1-.582-.085L12 7.092l.58 2.323A2 2 0 0 1 12 9.5Z" clip-rule="evenodd"></path>
</svg>

     
              <span class="m-top-auto"> Terms of Service</span>
            </a>
             <a href="{{ url('/coupon') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path d="M1.75 1.002a.75.75 0 1 0 0 1.5h1.835l1.24 5.113A3.752 3.752 0 0 0 2 11.25c0 .414.336.75.75.75h10.5a.75.75 0 0 0 0-1.5H3.628A2.25 2.25 0 0 1 5.75 9h6.5a.75.75 0 0 0 .73-.578l.846-3.595a.75.75 0 0 0-.578-.906 44.118 44.118 0 0 0-7.996-.91l-.348-1.436a.75.75 0 0 0-.73-.573H1.75ZM5 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM13 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path>
</svg>



              <span class="m-top-auto"> Purchase Coupon Code</span>
            </a>
              <a href="{{ url('/earners/top') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                 <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4105 9.86058C20.3559 9.8571 20.2964 9.85712 20.2348 9.85715L20.2194 9.85715H17.8015C15.8086 9.85715 14.1033 11.4382 14.1033 13.5C14.1033 15.5618 15.8086 17.1429 17.8015 17.1429H20.2194L20.2348 17.1429C20.2964 17.1429 20.3559 17.1429 20.4105 17.1394C21.22 17.0879 21.9359 16.4495 21.9961 15.5577C22.0001 15.4992 22 15.4362 22 15.3778L22 15.3619V11.6381L22 11.6222C22 11.5638 22.0001 11.5008 21.9961 11.4423C21.9359 10.5506 21.22 9.91209 20.4105 9.86058ZM17.5872 14.4714C18.1002 14.4714 18.5162 14.0365 18.5162 13.5C18.5162 12.9635 18.1002 12.5286 17.5872 12.5286C17.0741 12.5286 16.6581 12.9635 16.6581 13.5C16.6581 14.0365 17.0741 14.4714 17.5872 14.4714Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.2341 18.6C20.3778 18.5963 20.4866 18.7304 20.4476 18.8699C20.2541 19.562 19.947 20.1518 19.4542 20.6485C18.7329 21.3755 17.8183 21.6981 16.6882 21.8512C15.5902 22 14.1872 22 12.4158 22H10.3794C8.60803 22 7.20501 22 6.10697 21.8512C4.97692 21.6981 4.06227 21.3755 3.34096 20.6485C2.61964 19.9215 2.29953 18.9997 2.1476 17.8608C1.99997 16.7541 1.99999 15.3401 2 13.5548V13.4452C1.99998 11.6599 1.99997 10.2459 2.1476 9.13924C2.29953 8.00031 2.61964 7.07848 3.34096 6.35149C4.06227 5.62451 4.97692 5.30188 6.10697 5.14876C7.205 4.99997 8.60802 4.99999 10.3794 5L12.4158 5C14.1872 4.99998 15.5902 4.99997 16.6882 5.14876C17.8183 5.30188 18.7329 5.62451 19.4542 6.35149C19.947 6.84817 20.2541 7.43804 20.4476 8.13012C20.4866 8.26959 20.3778 8.40376 20.2341 8.4L17.8015 8.40001C15.0673 8.40001 12.6575 10.5769 12.6575 13.5C12.6575 16.4231 15.0673 18.6 17.8015 18.6L20.2341 18.6ZM5.61446 8.88572C5.21522 8.88572 4.89157 9.21191 4.89157 9.61429C4.89157 10.0167 5.21522 10.3429 5.61446 10.3429H9.46988C9.86912 10.3429 10.1928 10.0167 10.1928 9.61429C10.1928 9.21191 9.86912 8.88572 9.46988 8.88572H5.61446Z" fill="CurrentColor"></path>
<path d="M7.77668 4.02439L9.73549 2.58126C10.7874 1.80625 12.2126 1.80625 13.2645 2.58126L15.2336 4.03197C14.4103 3.99995 13.4909 3.99998 12.4829 4H10.3123C9.39123 3.99998 8.5441 3.99996 7.77668 4.02439Z" fill="CurrentColor"></path>
</svg>



              <span class="m-top-auto">Top Earners</span>
            </a>
          @if (!Auth::guard('users')->check())
                <a href="{{ url('/login') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.8447 8.09467C10.5518 8.38756 10.5518 8.86244 10.8447 9.15533L12.5643 10.875H4.375C3.96079 10.875 3.625 11.2108 3.625 11.625C3.625 12.0392 3.96079 12.375 4.375 12.375H12.5643L10.8447 14.0947C10.5518 14.3876 10.5518 14.8624 10.8447 15.1553C11.1376 15.4482 11.6124 15.4482 11.9053 15.1553L14.9053 12.1553C15.1982 11.8624 15.1982 11.3876 14.9053 11.0947L11.9053 8.09467C11.6124 7.80178 11.1376 7.80178 10.8447 8.09467Z" fill="CurrentColor"></path>
<path d="M12.375 5.87745C12.375 6.3254 12.6492 6.71725 12.966 7.03401L15.966 10.034C16.8447 10.9127 16.8447 12.3373 15.966 13.216L12.966 16.216C12.6492 16.5327 12.375 16.9246 12.375 17.3726V19.625C16.7933 19.625 20.375 16.0433 20.375 11.625C20.375 7.20672 16.7933 3.625 12.375 3.625V5.87745Z" fill="CurrentColor"></path>
</svg>

              <span class="m-top-auto"> Login</span>
            </a>
          @else
                <a href="{{ url('/users/dashboard') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
           <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M2 6.5C2 4.37868 2 3.31802 2.65901 2.65901C3.31802 2 4.37868 2 6.5 2C8.62132 2 9.68198 2 10.341 2.65901C11 3.31802 11 4.37868 11 6.5C11 8.62132 11 9.68198 10.341 10.341C9.68198 11 8.62132 11 6.5 11C4.37868 11 3.31802 11 2.65901 10.341C2 9.68198 2 8.62132 2 6.5Z" fill="CurrentColor"></path>
<path d="M13 17.5C13 15.3787 13 14.318 13.659 13.659C14.318 13 15.3787 13 17.5 13C19.6213 13 20.682 13 21.341 13.659C22 14.318 22 15.3787 22 17.5C22 19.6213 22 20.682 21.341 21.341C20.682 22 19.6213 22 17.5 22C15.3787 22 14.318 22 13.659 21.341C13 20.682 13 19.6213 13 17.5Z" fill="CurrentColor"></path>
<path d="M2 17.5C2 15.3787 2 14.318 2.65901 13.659C3.31802 13 4.37868 13 6.5 13C8.62132 13 9.68198 13 10.341 13.659C11 14.318 11 15.3787 11 17.5C11 19.6213 11 20.682 10.341 21.341C9.68198 22 8.62132 22 6.5 22C4.37868 22 3.31802 22 2.65901 21.341C2 20.682 2 19.6213 2 17.5Z" fill="CurrentColor"></path>
<path d="M13 6.5C13 4.37868 13 3.31802 13.659 2.65901C14.318 2 15.3787 2 17.5 2C19.6213 2 20.682 2 21.341 2.65901C22 3.31802 22 4.37868 22 6.5C22 8.62132 22 9.68198 21.341 10.341C20.682 11 19.6213 11 17.5 11C15.3787 11 14.318 11 13.659 10.341C13 9.68198 13 8.62132 13 6.5Z" fill="CurrentColor"></path>
</svg>

              <span class="m-top-auto"> Dashboard</span>
            </a>
          @endif
    </div>
    </header>
    {{-- MOBILE NAV --}}
     <section class="nav mobile-nav backdrop-blur-5 high pos-fixed bg w-full top-0 left-0 right-0">
        <nav class="c-white">
          {{-- NEW NAV LINK --}}
            <a class="w-full clip-10 br-10 bold p-10 font-1 w-full g-5 row align-center no-u c-white" href="{{ url('/') }}">
             <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path d="M8.543 2.232a.75.75 0 0 0-1.085 0l-5.25 5.5A.75.75 0 0 0 2.75 9H4v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 1 1 2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V9h1.25a.75.75 0 0 0 .543-1.268l-5.25-5.5Z"></path>
</svg>


              <span class="m-top-auto">  Home</span>
            </a>
            {{-- NEW NAV LINK --}}
            <a href="{{ url('/about') }}" class="w-full clip-10 br-10 g-5 bold p-10 font-1 w-full row align-center no-u c-inherit">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0ZM9 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6.75 8a.75.75 0 0 0 0 1.5h.75v1.75a.75.75 0 0 0 1.5 0v-2.5A.75.75 0 0 0 8.25 8h-1.5Z" clip-rule="evenodd"></path>
</svg>


              <span class="m-top-auto"> About Us</span>
            </a>
            {{-- NEW NAV LINK --}}
             <a href="{{ url('/coupon/checker') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm3.844-8.791a.75.75 0 0 0-1.188-.918l-3.7 4.79-1.649-1.833a.75.75 0 1 0-1.114 1.004l2.25 2.5a.75.75 0 0 0 1.15-.043l4.25-5.5Z" clip-rule="evenodd"></path>
</svg>



              <span class="m-top-auto"> Coupon Checker</span>
            </a>
              <a href="{{ url('/terms') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M8.75 2.5a.75.75 0 0 0-1.5 0v.508a32.661 32.661 0 0 0-4.624.434.75.75 0 0 0 .246 1.48l.13-.021-1.188 4.75a.75.75 0 0 0 .33.817A3.487 3.487 0 0 0 4 11c.68 0 1.318-.195 1.856-.532a.75.75 0 0 0 .33-.818l-1.25-5a31.31 31.31 0 0 1 2.314-.141V12.012c-.882.027-1.752.104-2.607.226a.75.75 0 0 0 .213 1.485 22.188 22.188 0 0 1 6.288 0 .75.75 0 1 0 .213-1.485 23.657 23.657 0 0 0-2.607-.226V4.509c.779.018 1.55.066 2.314.14L9.814 9.65a.75.75 0 0 0 .329.818 3.487 3.487 0 0 0 1.856.532c.68 0 1.318-.195 1.856-.532a.75.75 0 0 0 .33-.818L12.997 4.9l.13.022a.75.75 0 1 0 .247-1.48 32.66 32.66 0 0 0-4.624-.434V2.5ZM3.42 9.415a2 2 0 0 0 1.16 0L4 7.092l-.58 2.323ZM12 9.5a2 2 0 0 1-.582-.085L12 7.092l.58 2.323A2 2 0 0 1 12 9.5Z" clip-rule="evenodd"></path>
</svg>

     
              <span class="m-top-auto"> Terms of Service</span>
            </a>
             <a href="{{ url('/coupon') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="CurrentColor" aria-hidden="true" data-slot="icon">
  <path d="M1.75 1.002a.75.75 0 1 0 0 1.5h1.835l1.24 5.113A3.752 3.752 0 0 0 2 11.25c0 .414.336.75.75.75h10.5a.75.75 0 0 0 0-1.5H3.628A2.25 2.25 0 0 1 5.75 9h6.5a.75.75 0 0 0 .73-.578l.846-3.595a.75.75 0 0 0-.578-.906 44.118 44.118 0 0 0-7.996-.91l-.348-1.436a.75.75 0 0 0-.73-.573H1.75ZM5 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM13 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path>
</svg>



              <span class="m-top-auto"> Purchase Coupon Code</span>
            </a>
              <a href="{{ url('/earners/top') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                 <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4105 9.86058C20.3559 9.8571 20.2964 9.85712 20.2348 9.85715L20.2194 9.85715H17.8015C15.8086 9.85715 14.1033 11.4382 14.1033 13.5C14.1033 15.5618 15.8086 17.1429 17.8015 17.1429H20.2194L20.2348 17.1429C20.2964 17.1429 20.3559 17.1429 20.4105 17.1394C21.22 17.0879 21.9359 16.4495 21.9961 15.5577C22.0001 15.4992 22 15.4362 22 15.3778L22 15.3619V11.6381L22 11.6222C22 11.5638 22.0001 11.5008 21.9961 11.4423C21.9359 10.5506 21.22 9.91209 20.4105 9.86058ZM17.5872 14.4714C18.1002 14.4714 18.5162 14.0365 18.5162 13.5C18.5162 12.9635 18.1002 12.5286 17.5872 12.5286C17.0741 12.5286 16.6581 12.9635 16.6581 13.5C16.6581 14.0365 17.0741 14.4714 17.5872 14.4714Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.2341 18.6C20.3778 18.5963 20.4866 18.7304 20.4476 18.8699C20.2541 19.562 19.947 20.1518 19.4542 20.6485C18.7329 21.3755 17.8183 21.6981 16.6882 21.8512C15.5902 22 14.1872 22 12.4158 22H10.3794C8.60803 22 7.20501 22 6.10697 21.8512C4.97692 21.6981 4.06227 21.3755 3.34096 20.6485C2.61964 19.9215 2.29953 18.9997 2.1476 17.8608C1.99997 16.7541 1.99999 15.3401 2 13.5548V13.4452C1.99998 11.6599 1.99997 10.2459 2.1476 9.13924C2.29953 8.00031 2.61964 7.07848 3.34096 6.35149C4.06227 5.62451 4.97692 5.30188 6.10697 5.14876C7.205 4.99997 8.60802 4.99999 10.3794 5L12.4158 5C14.1872 4.99998 15.5902 4.99997 16.6882 5.14876C17.8183 5.30188 18.7329 5.62451 19.4542 6.35149C19.947 6.84817 20.2541 7.43804 20.4476 8.13012C20.4866 8.26959 20.3778 8.40376 20.2341 8.4L17.8015 8.40001C15.0673 8.40001 12.6575 10.5769 12.6575 13.5C12.6575 16.4231 15.0673 18.6 17.8015 18.6L20.2341 18.6ZM5.61446 8.88572C5.21522 8.88572 4.89157 9.21191 4.89157 9.61429C4.89157 10.0167 5.21522 10.3429 5.61446 10.3429H9.46988C9.86912 10.3429 10.1928 10.0167 10.1928 9.61429C10.1928 9.21191 9.86912 8.88572 9.46988 8.88572H5.61446Z" fill="CurrentColor"></path>
<path d="M7.77668 4.02439L9.73549 2.58126C10.7874 1.80625 12.2126 1.80625 13.2645 2.58126L15.2336 4.03197C14.4103 3.99995 13.4909 3.99998 12.4829 4H10.3123C9.39123 3.99998 8.5441 3.99996 7.77668 4.02439Z" fill="CurrentColor"></path>
</svg>



              <span class="m-top-auto">Top Earners</span>
            </a>
          @if (!Auth::guard('users')->check())
                <a href="{{ url('/login') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.8447 8.09467C10.5518 8.38756 10.5518 8.86244 10.8447 9.15533L12.5643 10.875H4.375C3.96079 10.875 3.625 11.2108 3.625 11.625C3.625 12.0392 3.96079 12.375 4.375 12.375H12.5643L10.8447 14.0947C10.5518 14.3876 10.5518 14.8624 10.8447 15.1553C11.1376 15.4482 11.6124 15.4482 11.9053 15.1553L14.9053 12.1553C15.1982 11.8624 15.1982 11.3876 14.9053 11.0947L11.9053 8.09467C11.6124 7.80178 11.1376 7.80178 10.8447 8.09467Z" fill="CurrentColor"></path>
<path d="M12.375 5.87745C12.375 6.3254 12.6492 6.71725 12.966 7.03401L15.966 10.034C16.8447 10.9127 16.8447 12.3373 15.966 13.216L12.966 16.216C12.6492 16.5327 12.375 16.9246 12.375 17.3726V19.625C16.7933 19.625 20.375 16.0433 20.375 11.625C20.375 7.20672 16.7933 3.625 12.375 3.625V5.87745Z" fill="CurrentColor"></path>
</svg>

              <span class="m-top-auto"> Login</span>
            </a>
          @else
                <a href="{{ url('/users/dashboard') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
           <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M2 6.5C2 4.37868 2 3.31802 2.65901 2.65901C3.31802 2 4.37868 2 6.5 2C8.62132 2 9.68198 2 10.341 2.65901C11 3.31802 11 4.37868 11 6.5C11 8.62132 11 9.68198 10.341 10.341C9.68198 11 8.62132 11 6.5 11C4.37868 11 3.31802 11 2.65901 10.341C2 9.68198 2 8.62132 2 6.5Z" fill="CurrentColor"></path>
<path d="M13 17.5C13 15.3787 13 14.318 13.659 13.659C14.318 13 15.3787 13 17.5 13C19.6213 13 20.682 13 21.341 13.659C22 14.318 22 15.3787 22 17.5C22 19.6213 22 20.682 21.341 21.341C20.682 22 19.6213 22 17.5 22C15.3787 22 14.318 22 13.659 21.341C13 20.682 13 19.6213 13 17.5Z" fill="CurrentColor"></path>
<path d="M2 17.5C2 15.3787 2 14.318 2.65901 13.659C3.31802 13 4.37868 13 6.5 13C8.62132 13 9.68198 13 10.341 13.659C11 14.318 11 15.3787 11 17.5C11 19.6213 11 20.682 10.341 21.341C9.68198 22 8.62132 22 6.5 22C4.37868 22 3.31802 22 2.65901 21.341C2 20.682 2 19.6213 2 17.5Z" fill="CurrentColor"></path>
<path d="M13 6.5C13 4.37868 13 3.31802 13.659 2.65901C14.318 2 15.3787 2 17.5 2C19.6213 2 20.682 2 21.341 2.65901C22 3.31802 22 4.37868 22 6.5C22 8.62132 22 9.68198 21.341 10.341C20.682 11 19.6213 11 17.5 11C15.3787 11 14.318 11 13.659 10.341C13 9.68198 13 8.62132 13 6.5Z" fill="CurrentColor"></path>
</svg>

              <span class="m-top-auto"> Dashboard</span>
            </a>
          @endif
       
        </nav>
    </section>
    
    
    <main class="p-10 pc-x-padding c-inherit">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" style="background:white;color:black;" class="child">

  </div>
</section>
<section onclick="HideSlideUp()" class="slideup">
  <div onclick="event.stopPropagation()" class="child bg-secondary-dark">@yield('slideup_child')</div>
</section>
    </main>
   <footer class="w-full pc-align-center c-white bg p-10 column g-10">
   <img src="{{ asset('favicon/logo-white.png?v=1.1') }}" alt="" class="grid-full w-100 pc-m-x-auto">
   <span class="font-1 grid-full">Your cycle of wealth. A global platform for earnings through gaming, content watching, affiliate marketing, and digital services.

</span>
<div class="payment-patners">
   <strong style="border-bottom:2px solid var(--primary-bright)" class="font-1 grid-full m-right-auto p-y-5 w-fit">Our Payment Patners</strong>
   <div class="patner">
    <svg width="70" height="30" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="120" height="80" rx="4" fill="#1434CB"></rect>
<path fill-rule="evenodd" clip-rule="evenodd" d="M86.6666 44.9375L90.3239 35.0625L92.3809 44.9375H86.6666ZM100.952 52.8375L95.8086 27.1625H88.7383C86.3525 27.1625 85.7723 29.0759 85.7723 29.0759L76.1904 52.8375H82.8868L84.2269 49.0244H92.3947L93.1479 52.8375H100.952Z" fill="white"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M77.1866 33.5711L78.0952 28.244C78.0952 28.244 75.2896 27.1625 72.3648 27.1625C69.2031 27.1625 61.6955 28.5638 61.6955 35.3738C61.6955 41.7825 70.5071 41.8621 70.5071 45.2266C70.5071 48.5912 62.6034 47.9901 59.9955 45.8676L59.0476 51.4362C59.0476 51.4362 61.8919 52.8375 66.2397 52.8375C70.5869 52.8375 77.1467 50.5544 77.1467 44.3455C77.1467 37.8964 68.2552 37.296 68.2552 34.4921C68.2552 31.6882 74.4602 32.0484 77.1866 33.5711Z" fill="white"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M54.6517 52.8375H47.6191L52.0144 27.1625H59.0477L54.6517 52.8375Z" fill="white"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M42.3113 27.1625L35.9217 44.8213L35.1663 41.0185L35.167 41.0199L32.9114 29.4749C32.9114 29.4749 32.6394 27.1625 29.7324 27.1625H19.1709L19.0476 27.5966C19.0476 27.5966 22.2782 28.2669 26.057 30.5326L31.8793 52.8375H38.8617L49.5238 27.1625H42.3113Z" fill="white"></path>
</svg>

   </div>

    <div class="patner">
   <svg width="70" height="30" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="120" height="80" rx="4" fill="white"></rect>
<path fill-rule="evenodd" clip-rule="evenodd" d="M97.5288 48.1562V47.2384H97.289L97.0137 47.8698L96.7378 47.2384H96.498V48.1562H96.6675V47.4637L96.9257 48.0609H97.1011L97.36 47.4624V48.1562H97.5288ZM96.0111 48.1562V47.3947H96.318V47.2397H95.5361V47.3947H95.843V48.1562H96.0111Z" fill="#F79E1B"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M49.6521 52.095H70.3479V14.9044H49.6521V52.095Z" fill="#FF5F00"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M98.2675 33.5003C98.2675 46.563 87.6791 57.152 74.6171 57.152C69.0996 57.152 64.0229 55.2624 60 52.0956C65.5011 47.7646 69.0339 41.0448 69.0339 33.5003C69.0339 25.9552 65.5011 19.2354 60 14.9044C64.0229 11.7376 69.0996 9.84802 74.6171 9.84802C87.6791 9.84802 98.2675 20.437 98.2675 33.5003Z" fill="#F79E1B"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M50.966 33.5003C50.966 25.9552 54.4988 19.2354 59.9999 14.9044C55.977 11.7376 50.9003 9.84802 45.3828 9.84802C32.3208 9.84802 21.7324 20.437 21.7324 33.5003C21.7324 46.563 32.3208 57.152 45.3828 57.152C50.9003 57.152 55.977 55.2624 59.9999 52.0956C54.4988 47.7646 50.966 41.0448 50.966 33.5003Z" fill="#EB001B"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M34.9203 69.7951V65.9251C34.9203 64.4415 34.0233 63.474 32.4855 63.474C31.7165 63.474 30.8836 63.732 30.3069 64.5705C29.8583 63.861 29.2176 63.474 28.2564 63.474C27.6157 63.474 26.9749 63.6675 26.4623 64.377V63.603H25.1167V69.7951H26.4623V66.3766C26.4623 65.28 27.039 64.764 27.936 64.764C28.8331 64.764 29.2816 65.3445 29.2816 66.3766V69.7951H30.6272V66.3766C30.6272 65.28 31.268 64.764 32.101 64.764C32.9981 64.764 33.4466 65.3445 33.4466 66.3766V69.7951H34.9203ZM54.848 63.6034H52.6694V61.7325H51.3238V63.6034H50.1064V64.8292H51.3238V67.6679C51.3238 69.0872 51.9005 69.9259 53.4384 69.9259C54.015 69.9259 54.6558 69.7324 55.1043 69.4743L54.7199 68.313C54.3354 68.5711 53.8869 68.6356 53.5665 68.6356C52.9257 68.6356 52.6694 68.2485 52.6694 67.6034V64.8292H54.848V63.6034ZM66.2536 63.474C65.4847 63.474 64.9721 63.861 64.6517 64.377V63.603H63.3061V69.7951H64.6517V66.3121C64.6517 65.28 65.1002 64.6995 65.9332 64.6995C66.1895 64.6995 66.5099 64.764 66.7662 64.8285L67.1506 63.5385C66.8943 63.474 66.5099 63.474 66.2536 63.474ZM49.0171 64.119C48.3763 63.6675 47.4793 63.474 46.5181 63.474C44.9803 63.474 43.9551 64.248 43.9551 65.4735C43.9551 66.5056 44.724 67.0861 46.0696 67.2796L46.7104 67.3441C47.4152 67.4731 47.7997 67.6666 47.7997 67.9891C47.7997 68.4406 47.287 68.7631 46.39 68.7631C45.4929 68.7631 44.7881 68.4406 44.3395 68.1181L43.6988 69.1501C44.4036 69.6661 45.3648 69.9241 46.3259 69.9241C48.12 69.9241 49.1453 69.0856 49.1453 67.9246C49.1453 66.8281 48.3123 66.2476 47.0307 66.0541L46.39 65.9896C45.8133 65.9251 45.3648 65.7961 45.3648 65.409C45.3648 64.9575 45.8133 64.6995 46.5181 64.6995C47.287 64.6995 48.056 65.022 48.4404 65.2155L49.0171 64.119ZM84.7716 63.474C84.0027 63.474 83.4901 63.861 83.1697 64.377V63.603H81.8241V69.7951H83.1697V66.3121C83.1697 65.28 83.6182 64.6995 84.4512 64.6995C84.7075 64.6995 85.0279 64.764 85.2842 64.8285L85.6686 63.5385C85.4123 63.474 85.0279 63.474 84.7716 63.474ZM67.5992 66.6991C67.5992 68.5696 68.8807 69.9241 70.8671 69.9241C71.7641 69.9241 72.4049 69.7306 73.0456 69.2146L72.4049 68.1181C71.8923 68.5051 71.3797 68.6986 70.803 68.6986C69.7137 68.6986 68.9448 67.9246 68.9448 66.6991C68.9448 65.5381 69.7137 64.764 70.803 64.6995C71.3797 64.6995 71.8923 64.893 72.4049 65.28L73.0456 64.1835C72.4049 63.6675 71.7641 63.474 70.8671 63.474C68.8807 63.474 67.5992 64.8285 67.5992 66.6991ZM80.0299 63.603H78.6843V64.377C78.2358 63.7965 77.5951 63.474 76.7621 63.474C75.032 63.474 73.6864 64.8285 73.6864 66.6991C73.6864 68.5696 75.032 69.9241 76.7621 69.9241C77.6591 69.9241 78.2999 69.6016 78.6843 69.0211V69.7951H80.0299V63.603ZM75.0961 66.6991C75.0961 65.6026 75.8009 64.6995 76.9543 64.6995C78.0436 64.6995 78.8125 65.5381 78.8125 66.6991C78.8125 67.7956 78.0436 68.6986 76.9543 68.6986C75.8009 68.6341 75.0961 67.7956 75.0961 66.6991ZM59.013 63.474C57.2188 63.474 55.9373 64.764 55.9373 66.6991C55.9373 68.6341 57.2188 69.9241 59.077 69.9241C59.9741 69.9241 60.8712 69.6661 61.576 69.0856L60.9353 68.1181C60.4226 68.5051 59.7819 68.7631 59.1411 68.7631C58.3081 68.7631 57.4751 68.3761 57.2829 67.2796H61.8323V66.7636C61.8964 64.764 60.743 63.474 59.013 63.474ZM59.013 64.635C59.846 64.635 60.4226 65.151 60.5508 66.1186H57.347C57.4751 65.28 58.0518 64.635 59.013 64.635ZM92.3966 61.152H91.051V64.377C90.6025 63.7965 89.9617 63.474 89.1288 63.474C87.3987 63.474 86.0531 64.8285 86.0531 66.6991C86.0531 68.5696 87.3987 69.9241 89.1288 69.9241C90.0258 69.9241 90.6666 69.6016 91.051 69.0211V69.7951H92.3966V61.152ZM87.4628 66.6991C87.4628 65.6026 88.1676 64.6995 89.321 64.6995C90.4103 64.6995 91.1792 65.5381 91.1792 66.6991C91.1792 67.7956 90.4103 68.6986 89.321 68.6986C88.1676 68.6341 87.4628 67.7956 87.4628 66.6991ZM42.4813 63.603H41.1357V64.377C40.6872 63.7965 40.0464 63.474 39.2134 63.474C37.4834 63.474 36.1378 64.8285 36.1378 66.6991C36.1378 68.5696 37.4834 69.9241 39.2134 69.9241C40.1105 69.9241 40.7513 69.6016 41.1357 69.0211V69.7951H42.4813V63.603ZM37.4834 66.6991C37.4834 65.6026 38.1882 64.6995 39.3416 64.6995C40.4309 64.6995 41.1998 65.5381 41.1998 66.6991C41.1998 67.7956 40.4309 68.6986 39.3416 68.6986C38.1882 68.6341 37.4834 67.7956 37.4834 66.6991Z" fill="black"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M94.3102 69.5156V69.6371H94.4202C94.4455 69.6371 94.4653 69.632 94.4805 69.6221C94.4952 69.6123 94.5028 69.5968 94.5028 69.5756C94.5028 69.5559 94.4952 69.5409 94.4805 69.5306C94.4653 69.5207 94.4455 69.5156 94.4202 69.5156H94.3102ZM94.4212 69.4302C94.479 69.4302 94.5231 69.4431 94.5541 69.469C94.5855 69.4954 94.6007 69.5306 94.6007 69.5756C94.6007 69.6133 94.5885 69.6449 94.5637 69.6692C94.5388 69.6935 94.5039 69.7086 94.4577 69.7142L94.6042 69.8865H94.4897L94.3543 69.7158H94.3102V69.8865H94.2149V69.4302H94.4212ZM94.3928 70.0433C94.445 70.0433 94.4932 70.0335 94.5383 70.0133C94.5835 69.9931 94.6225 69.9657 94.6565 69.9316C94.6904 69.8969 94.7168 69.856 94.7361 69.8094C94.7553 69.7629 94.765 69.7132 94.765 69.6599C94.765 69.6071 94.7553 69.5575 94.7361 69.5109C94.7168 69.4643 94.6904 69.4235 94.6565 69.3888C94.6225 69.3546 94.5835 69.3277 94.5383 69.3076C94.4932 69.2879 94.445 69.2781 94.3928 69.2781C94.3401 69.2781 94.2909 69.2879 94.2448 69.3076C94.1986 69.3277 94.1591 69.3546 94.1251 69.3888C94.0912 69.4235 94.0648 69.4643 94.0455 69.5109C94.0263 69.5575 94.0166 69.6071 94.0166 69.6599C94.0166 69.7132 94.0263 69.7629 94.0455 69.8094C94.0648 69.856 94.0912 69.8969 94.1251 69.9316C94.1591 69.9657 94.1986 69.9931 94.2448 70.0133C94.2909 70.0335 94.3401 70.0433 94.3928 70.0433ZM94.3928 69.1684C94.4608 69.1684 94.5241 69.1813 94.584 69.2072C94.6433 69.233 94.695 69.2677 94.7396 69.3127C94.7837 69.3572 94.8192 69.4095 94.8446 69.469C94.8699 69.529 94.8831 69.5927 94.8831 69.6599C94.8831 69.7277 94.8699 69.7913 94.8446 69.8508C94.8192 69.9098 94.7837 69.9621 94.7396 70.0066C94.695 70.0511 94.6433 70.0863 94.584 70.1127C94.5241 70.1385 94.4608 70.152 94.3928 70.152C94.3239 70.152 94.259 70.1385 94.1986 70.1127C94.1388 70.0863 94.0866 70.0511 94.0425 70.0066C93.9984 69.9621 93.9634 69.9098 93.938 69.8508C93.9122 69.7913 93.8995 69.7277 93.8995 69.6599C93.8995 69.5927 93.9122 69.529 93.938 69.469C93.9634 69.4095 93.9984 69.3572 94.0425 69.3127C94.0866 69.2677 94.1388 69.233 94.1986 69.2072C94.259 69.1813 94.3239 69.1684 94.3928 69.1684Z" fill="black"></path>
</svg>


   </div>
    <div class="patner">
<svg width="70" height="30" viewBox="0 0 120 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_828_1381)">
<rect width="120" height="80" rx="4" fill="url(#paint0_linear_828_1381)"></rect>
<path d="M108.261 30.2978C108.277 27.824 107.055 26.0674 104.819 25.056C104.129 24.7437 103.363 24.5908 102.624 24.3985C102 24.2365 101.343 24.1834 100.737 23.9749C99.7051 23.6194 99.2539 22.8865 99.3803 21.9524C99.5357 20.804 100.26 20.0998 101.364 20.0224C102.463 19.9454 103.301 20.3167 103.925 21.2849C104.559 22.267 105.567 22.4612 106.441 21.9031C107.263 21.3771 107.515 20.2919 106.984 19.3275C106.401 18.2692 105.519 17.5075 104.444 16.9695C104.127 16.8109 103.796 16.6801 103.441 16.5233C103.441 15.9378 103.46 15.4141 103.437 14.8924C103.387 13.7492 102.678 13.0084 101.654 13.0001C100.625 12.9917 99.8861 13.714 99.8064 14.8492C99.7697 15.3717 99.8002 15.8989 99.8002 16.5306C99.5762 16.633 99.436 16.7047 99.2904 16.7626C96.4567 17.8886 95.5569 20.7956 95.7282 22.6973C95.9578 25.2472 97.617 27.0032 100.322 27.6828C100.634 27.7611 100.961 27.7809 101.275 27.8528C101.943 28.0057 102.633 28.1072 103.266 28.3535C104.25 28.7362 104.662 29.4421 104.626 30.4244C104.585 31.5006 104.004 32.3378 103.069 32.6659C101.238 33.3083 99.3971 32.5878 98.4785 30.8693C97.9383 29.8588 96.9824 29.4864 96.0499 29.9233C95.2018 30.3207 94.798 31.2041 95.0992 32.1488C95.6609 33.9104 96.8542 35.1138 98.5207 35.8667C98.919 36.0466 99.3313 36.1953 99.8057 36.3859C99.8057 36.9704 99.7655 37.5362 99.8144 38.0941C99.9053 39.1316 100.685 39.8757 101.621 39.8825C102.626 39.8898 103.378 39.1223 103.434 38.0009C103.46 37.4826 103.439 36.9618 103.439 36.4499C103.972 36.2315 104.427 36.0732 104.858 35.8634C107.175 34.7353 108.245 32.803 108.261 30.2978Z" fill="#F4F4F4"></path>
<path d="M27.926 0V40.3359C23.3806 35.5601 17.1902 36.5336 14.0999 39.1237C10.0242 42.5396 10.4036 47.0286 15.2701 51.5382H0V54.7609H25.4308C23.3866 56.552 21.4988 58.2042 19.6135 59.8586C18.7997 60.5728 17.9608 61.2673 17.1887 62.0151C16.5079 62.6744 16.5508 63.5439 17.2017 64.1315C17.8566 64.7227 18.819 64.7601 19.6109 64.2043C19.8995 64.0017 20.1536 63.7603 20.416 63.53C22.6213 61.5944 24.8239 59.6564 27.0306 57.722C27.2803 57.5031 27.5505 57.3023 27.9352 56.9937V80H31.5708V56.8892C33.3701 58.4795 34.9862 59.9113 36.6066 61.3394C38.5726 63.072 40.5065 64.8349 42.5382 66.506C42.9818 66.8709 43.8178 67.1066 44.4036 67.0234C44.8766 66.9563 45.5598 66.3341 45.5838 65.932C45.6173 65.3728 45.2837 64.6513 44.8273 64.238C41.6216 61.3353 38.3434 58.4944 35.0902 55.6321C34.8067 55.3827 34.5364 55.1215 34.1355 54.7508H120V51.5387H44.0819C46.8049 49.7381 48.2627 47.5441 48.2151 44.6896C48.179 42.5254 47.2166 40.7137 45.4829 39.1938C42.58 36.6489 36.3638 35.4033 31.6031 40.2783V0H27.926ZM19.2161 49.5204C16.5286 49.0305 14.6559 46.9546 14.7719 44.6972C14.8893 42.409 16.9185 40.4066 19.4244 40.1061C22.3099 39.76 24.965 41.0961 25.6627 43.4719C26.3636 45.8583 26.808 48.303 27.4039 50.8921C24.5217 50.4125 21.8604 50.0024 19.2161 49.5204ZM33.6988 43.8277C34.3101 41.3838 36.8424 39.8657 39.7657 40.0884C42.3886 40.2883 44.5055 42.2343 44.7165 44.6396C44.9143 46.8942 43.0044 49.022 40.2433 49.5278C37.6042 50.0113 34.9488 50.4263 32.1214 50.9016C32.669 48.4235 33.1267 46.1146 33.6988 43.8277Z" fill="white"></path>
</g>
<defs>
<linearGradient id="paint0_linear_828_1381" x1="34.9333" y1="15.4667" x2="54.9376" y2="59.9923" gradientUnits="userSpaceOnUse">
<stop stop-color="#DDBD68"></stop>
<stop offset="1" stop-color="#C6A34F"></stop>
</linearGradient>
<clipPath id="clip0_828_1381">
<rect width="120" height="80" rx="4" fill="white"></rect>
</clipPath>
</defs>
</svg>






   </div>
</div>
 <div class="mobile-footer-links g-5">
    <strong style="border-bottom:2px solid var(--primary-bright)" class="font-1 p-y-5 w-fit">Quick LInks</strong>
   

 <a href="{{ url('about') }}" class="no-u c-white">About Us</a>
 <a href="{{ url('vendors') }}" class="no-u c-white">Vendors</a>
 <a href="{{ url('terms') }}" class="no-u c-white">Terms of Service</a>
 <a href="{{ url('package/list') }}" class="no-u c-white">Packages</a>
 <a href="{{ url('register') }}" class="no-u c-white">Get Started</a>
 <a href="{{ url('login') }}" class="no-u c-white">Sign In</a>
 
 </div>

 <div class="pc-footer-links g-5">
  
    <strong style="border-bottom:2px solid var(--primary-bright)" class="font-1 grid-full p-y-5 w-fit">Quick LInks</strong>
   

 <a href="{{ url('about') }}" class="no-u c-white">About Us</a>
 <a href="{{ url('vendors') }}" class="no-u c-white">Vendors</a>
 <a href="{{ url('terms') }}" class="no-u c-white">Terms of Service</a>
 <a href="{{ url('package/list') }}" class="no-u c-white">Packages</a>
 <a href="{{ url('register') }}" class="no-u c-white">Get Started</a>
 <a href="{{ url('login') }}" class="no-u c-white">Sign In</a>
 
 </div>

 <hr style="background:var(--primary-bright)" class="grid-full">
 <div class="w-full align-center grid-full text-center column justify-center">
    <span>&copy;2025 {{ config('app.name') }}.</span>
     <span class="font-1" >Built & Designed by <a style="color:var(--primary-brighter)" href="https://wa.me/+2349013350351">Techie Innovations</a></span>
 </div>
</footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script class="js">
      window.addEventListener('load',()=>{
        try{
          // restyle
          document.querySelector('main').style.paddingTop=document.querySelector('header').getBoundingClientRect().height + 10 + 'px';
            document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
        document.querySelector('section.nav').style.top=document.querySelector('header').offsetHeight + 'px';
     
        }catch(error){
          alert(error.stack)
        }
       });

    </script>
    @yield('js')
</body>
</html>