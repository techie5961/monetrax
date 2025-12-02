@extends('layout.users.app')
@section('title')
    Dashboard
@endsection
@section('css')
    <style class="css">
        .quick-link{
            position:relative;
            

        }
        .quick-link .group{
            z-index:20;
            position:relative;
        }
        .quick-link::before{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            width:40%;
            height:40%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(30px);
            z-index:10;
        }
         .quick-link::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            width:20%;
            height:20%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(20px);
            z-index:10;
        }
        .populate.shown .form{
            animation:opaq-in 0.5s ease forwards;
            
        }
        .affiliate-balance-div{
            background:var(--primary);
            position:relative;
        }
          .activities-balance-div{
            background:gold;
            position:relative;
            color:black;
        }
        .all-time-balance-div{
            background:rgb(108,92,230);
            position:relative;
            color:white;
        }
          .activities-balance-div .balance-name{
           
            color:#222;
        }
         .all-time-balance-div .balance-name{
           
            color:whitesmoke;
        }
        
      .rep-img{
            position:absolute;
            bottom:0;
            right:0;
        }
        .rep-img{
            height:150px;
            pointer-events:none;
            z-index:200;
        }
        .balance-divs{
            overflow: hidden;
            /* clip-path:inset(0 round 20px); */
        }
        .balance-divs.affiliate-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.activities-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:rgb(119, 89, 14);
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.all-time-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-name{
            color:silver;
        }
        .balance-divs .content{
            position:relative;
            z-index:300;
        }
        .balance-display.balance-hidden .balance{
            display:none !important;
        }
         .balance-display.balance-hidden .star{
            display:flex !important;
        }
        .balance-display.balance-shown .balance{
            display:flex !important;
        }
         .balance-display.balance-shown .star{
            display:none !important;
        }
        .balance-display.balance-hidden .hide-balance-text{
            display:none !important;
        }
        .balance-display.balance-hidden .show-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .hide-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .show-balance-text{
            display:none !important;
        }
        .wallets{
            position:absolute;
            top:100%;
            height:20px;
        }
        .wallets.activities{
            background:gold;
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.affiliate{
            background:var(--primary);
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.all_time{
            background:rgb(108,92,230);
             border-radius:0 0 10px 10px;
              left:8%;
            right:8%;
             height:30px;
             z-index:100;
        }
        .quick-link{
            position:relative;
            overflow:hidden;
            border:1px solid var(--bg-lighter);

        }
        .quick-link .content{
            position:relative;
            z-index:20;

        }
       
      .quick-link::before{
        content:'';
        position:absolute;
        top:0;
        right:0;
        left:calc(100% - 50%);
        background:var(--primary-light);
        filter:blur(20px);
        -webkit-filter:blur(20px);
        height:50%;
        width:50%;
        z-index:10
      }
        .chat-btn{
            width:100%;
            height:fit-content;
            background:linear-gradient(to top right,greenyellow,#4caf50,green);
            padding:10px;
            border:none;
            user-select:none;
            color:white;
            font-family:var(--font);
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
            clip-path:inset(0 round 5px);
            border-radius:5px;
            gap:5px;
            cursor:pointer;
        }
         
        @keyframes opaq-in{
            0%{
                opacity:0;
                transform:scale(0.9)
            }
            100%{
                opacity:1;
                transform:scale(1);
            }
        }
    </style>
@endsection
@section('main')
    <section class="column p-10 w-full g-10">
     <div class="w-full g-5 column">
       <div onclick="
      
        this.outerHTML=document.querySelector('template.affiliate-wallet').innerHTML;
      
        " class="pos-relative balance-houses w-full">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs all-time-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
            <div>Welcome back 👋,<br><strong class="desc"> {{ ucfirst(strtolower(Auth::guard('users')->user()->username)) }}</strong></div>
           <div class="row align-center m-left-auto g-10">
             <div style="background:rgba(0,0,0,0.3)" class="p-10 align-center column br-5 g-5">
                <span>Earnings today</span>
                <strong>{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format($earnings_today,2) }}</strong>
            </div>
             <div style="background:black;color:white;" class="p-10 align-center column br-5 g-5">
                <span>Withdrawals</span>
                <strong>{{ number_format($withdrawals_this_month) }} this Month</strong>
            </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
            <span class="balance-name">Total Balance</span>
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
             <strong style="font-size:2rem;" class="desc star">******</strong>
            <div onclick="
            event.stopPropagation();
            if(this.closest('.balance-display').classList.contains('balance-hidden')){
            this.closest('.balance-display').classList.remove('balance-hidden');
            this.closest('.balance-display').classList.add('balance-shown');
            }else{
             this.closest('.balance-display').classList.remove('balance-shown');
             this.closest('.balance-display').classList.add('balance-hidden');
           
            }
            " style="color:white" class="row align-center g-5">
                <div class="row align-center hide-balance-text g-5">
                    <span>Hide Balance</span>
                     <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2954 6.31064C22.6761 6.4738 22.8525 6.91471 22.6893 7.29543L22 6.99999C22.6893 7.29543 22.6894 7.29526 22.6893 7.29543L22.6886 7.29711L22.6875 7.2996L22.6843 7.30696L22.6737 7.33103C22.6647 7.35117 22.6519 7.37938 22.6353 7.41507C22.602 7.48642 22.5533 7.58774 22.4889 7.71415C22.36 7.9668 22.1676 8.32067 21.9085 8.73646C21.4829 9.4195 20.8724 10.2776 20.062 11.1302L21.0303 12.0985C21.3232 12.3914 21.3232 12.8663 21.0303 13.1592C20.7374 13.4521 20.2625 13.4521 19.9697 13.1592L18.9691 12.1586C18.3094 12.7113 17.5529 13.23 16.6951 13.6562L17.6286 15.091C17.8545 15.4381 17.7562 15.9027 17.409 16.1286C17.0618 16.3545 16.5973 16.2562 16.3713 15.909L15.2822 14.2351C14.5028 14.4896 13.659 14.6626 12.75 14.7246V16.5C12.75 16.9142 12.4142 17.25 12 17.25C11.5858 17.25 11.25 16.9142 11.25 16.5V14.7246C10.369 14.6645 9.54916 14.5002 8.78989 14.2584L7.71581 15.9091C7.48991 16.2563 7.02532 16.3546 6.67813 16.1287C6.33095 15.9028 6.23263 15.4382 6.45853 15.091L7.37095 13.6888C6.50657 13.2666 5.74387 12.7502 5.07848 12.1983L4.1175 13.1592C3.82461 13.4521 3.34974 13.4521 3.05684 13.1592C2.76395 12.8663 2.76395 12.3915 3.05684 12.0986L3.98061 11.1748C3.15605 10.3151 2.53531 9.44655 2.10283 8.75466C1.8399 8.33403 1.64466 7.97564 1.51394 7.71968C1.44854 7.59162 1.39916 7.48894 1.36543 7.41663C1.34856 7.38047 1.33559 7.35188 1.32648 7.33148L1.31568 7.30709L1.31244 7.29964L1.31135 7.29713L1.31095 7.29618C1.31087 7.296 1.31063 7.29543 1.99998 6.99999L1.31095 7.29618C1.14778 6.91546 1.32382 6.4738 1.70455 6.31064C2.08495 6.1476 2.52545 6.32354 2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361L2.6899 6.70581L2.69597 6.71952C2.70186 6.73271 2.71146 6.7539 2.72479 6.78247C2.75145 6.83963 2.79302 6.92624 2.84982 7.03747C2.96351 7.26009 3.13768 7.58027 3.37479 7.95959C3.85039 8.72047 4.57163 9.70708 5.55567 10.6216C6.42157 11.4263 7.48265 12.1676 8.75171 12.6558C9.7062 13.023 10.7854 13.25 12 13.25C13.2417 13.25 14.3421 13.0128 15.3125 12.6308C16.5739 12.1343 17.6277 11.3882 18.4867 10.582C19.4562 9.67196 20.1669 8.69515 20.6354 7.9432C20.869 7.5683 21.0406 7.25226 21.1526 7.03266C21.2086 6.92295 21.2495 6.83756 21.2758 6.78124C21.2889 6.75309 21.2983 6.73222 21.3041 6.71923L21.3101 6.70575L21.3106 6.70455C21.3107 6.70446 21.3106 6.70465 21.3106 6.70455M22.2954 6.31064C21.9148 6.14751 21.4739 6.32404 21.3106 6.70455ZM2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361Z" fill="CurrentColor"></path>
</svg>
               
                </div>
                 <div class="row align-center show-balance-text g-5">
                    <span>Show Balance</span>
               <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z" fill="CurrentColor"></path>
</svg>

                </div>

            </div>
        </div>
        <div class="align-center m-top-20 row g-10">
            <div style="background:white;color:rgb(108,92,230)" class="w-fit p-5 text-average p-x-20 br-1000">Breakdown</div>
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/transactions') }}')" style="background:transparent;color:white;border:1px solid white;" class="w-fit p-5 text-average p-x-20 br-1000">Transactions</div>
        </div>
        </div>

        <img style="right:10%;" src="{{ asset('images/9688bf8d-a5cd-4dea-aee5-e689379febc0-removebg-preview 2.png') }}" class="rep-img" alt="">
       </div>
{{-- WALLETS --}}
       <div style="background:var(--primary)" class="wallets activities"></div>
     <div style="background:gold" class="wallets all_time"></div>
       </div>

       {{-- TEMPLATES --}}
       {{-- AFFILIATE BALANCE  TEMPLATE--}}
      <template class="affiliate-wallet">
         <div onclick="
      
        this.outerHTML=document.querySelector('template.activities-wallet').innerHTML;
      
        " class="pos-relative balance-houses w-full">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs affiliate-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
            <div>Welcome back 👋,<br><strong class="desc"> {{ ucfirst(strtolower(Auth::guard('users')->user()->username)) }}</strong></div>
           <div class="row align-center m-left-auto g-10">
             <div style="background:rgba(0,255,255,0.2)" class="p-10 align-center column br-5 g-5">
                <span>Earnings today</span>
                <strong>{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format($affiliate_earnings_today,2) }}</strong>
            </div>
             <div style="background:black;color:white;" class="p-10 align-center column br-5 g-5">
                <span>Withdrawals</span>
                <strong>{{ number_format($affiliate_withdrawals_this_month) }} this Month</strong>
            </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
            <span class="balance-name">Affiliate Balance</span>
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}</strong>
             <strong style="font-size:2rem;" class="desc star">******</strong>
            <div onclick="
             event.stopPropagation();
if(this.closest('.balance-display').classList.contains('balance-hidden')){
            this.closest('.balance-display').classList.remove('balance-hidden');
            this.closest('.balance-display').classList.add('balance-shown');
            }else{
             this.closest('.balance-display').classList.remove('balance-shown');
             this.closest('.balance-display').classList.add('balance-hidden');
           
            }
            " style="color:aqua" class="row align-center g-5">
                <div class="row align-center hide-balance-text g-5">
                    <span>Hide Balance</span>
                     <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2954 6.31064C22.6761 6.4738 22.8525 6.91471 22.6893 7.29543L22 6.99999C22.6893 7.29543 22.6894 7.29526 22.6893 7.29543L22.6886 7.29711L22.6875 7.2996L22.6843 7.30696L22.6737 7.33103C22.6647 7.35117 22.6519 7.37938 22.6353 7.41507C22.602 7.48642 22.5533 7.58774 22.4889 7.71415C22.36 7.9668 22.1676 8.32067 21.9085 8.73646C21.4829 9.4195 20.8724 10.2776 20.062 11.1302L21.0303 12.0985C21.3232 12.3914 21.3232 12.8663 21.0303 13.1592C20.7374 13.4521 20.2625 13.4521 19.9697 13.1592L18.9691 12.1586C18.3094 12.7113 17.5529 13.23 16.6951 13.6562L17.6286 15.091C17.8545 15.4381 17.7562 15.9027 17.409 16.1286C17.0618 16.3545 16.5973 16.2562 16.3713 15.909L15.2822 14.2351C14.5028 14.4896 13.659 14.6626 12.75 14.7246V16.5C12.75 16.9142 12.4142 17.25 12 17.25C11.5858 17.25 11.25 16.9142 11.25 16.5V14.7246C10.369 14.6645 9.54916 14.5002 8.78989 14.2584L7.71581 15.9091C7.48991 16.2563 7.02532 16.3546 6.67813 16.1287C6.33095 15.9028 6.23263 15.4382 6.45853 15.091L7.37095 13.6888C6.50657 13.2666 5.74387 12.7502 5.07848 12.1983L4.1175 13.1592C3.82461 13.4521 3.34974 13.4521 3.05684 13.1592C2.76395 12.8663 2.76395 12.3915 3.05684 12.0986L3.98061 11.1748C3.15605 10.3151 2.53531 9.44655 2.10283 8.75466C1.8399 8.33403 1.64466 7.97564 1.51394 7.71968C1.44854 7.59162 1.39916 7.48894 1.36543 7.41663C1.34856 7.38047 1.33559 7.35188 1.32648 7.33148L1.31568 7.30709L1.31244 7.29964L1.31135 7.29713L1.31095 7.29618C1.31087 7.296 1.31063 7.29543 1.99998 6.99999L1.31095 7.29618C1.14778 6.91546 1.32382 6.4738 1.70455 6.31064C2.08495 6.1476 2.52545 6.32354 2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361L2.6899 6.70581L2.69597 6.71952C2.70186 6.73271 2.71146 6.7539 2.72479 6.78247C2.75145 6.83963 2.79302 6.92624 2.84982 7.03747C2.96351 7.26009 3.13768 7.58027 3.37479 7.95959C3.85039 8.72047 4.57163 9.70708 5.55567 10.6216C6.42157 11.4263 7.48265 12.1676 8.75171 12.6558C9.7062 13.023 10.7854 13.25 12 13.25C13.2417 13.25 14.3421 13.0128 15.3125 12.6308C16.5739 12.1343 17.6277 11.3882 18.4867 10.582C19.4562 9.67196 20.1669 8.69515 20.6354 7.9432C20.869 7.5683 21.0406 7.25226 21.1526 7.03266C21.2086 6.92295 21.2495 6.83756 21.2758 6.78124C21.2889 6.75309 21.2983 6.73222 21.3041 6.71923L21.3101 6.70575L21.3106 6.70455C21.3107 6.70446 21.3106 6.70465 21.3106 6.70455M22.2954 6.31064C21.9148 6.14751 21.4739 6.32404 21.3106 6.70455ZM2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361Z" fill="CurrentColor"></path>
</svg>
               
                </div>
                 <div class="row align-center show-balance-text g-5">
                    <span>Show Balance</span>
               <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z" fill="CurrentColor"></path>
</svg>

                </div>

            </div>
        </div>
        <div class="align-center m-top-20 row g-10">
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/withdraw') }}')" style="background:aqua;color:navy" class="w-fit p-5 text-average p-x-20 br-1000">Withdraw</div>
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/transactions') }}')" style="background:transparent;color:aqua;border:1px solid aqua;" class="w-fit p-5 text-average p-x-20 br-1000">Transactions</div>
        </div>
        </div>

        <img src="{{ asset('images/20e51427-4437-4bb2-bcf9-7bd07027fedf-removebg-preview.png') }}" class="rep-img" alt="">
       </div>
{{-- WALLETS --}}
    <div class="wallets activities"></div>
     <div class="wallets all_time"></div>
       </div>
      </template>
      
{{-- ACTIVITIES BALANCE TEMPLATE --}}
      <template class="activities-wallet">
          <div onclick="
      
        this.outerHTML=document.querySelector('template.all-time-wallet').innerHTML;
      
        " class="pos-relative balance-houses w-full">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs activities-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
            <div>Welcome back 👋,<br><strong class="desc"> {{ ucfirst(strtolower(Auth::guard('users')->user()->username)) }}</strong></div>
           <div class="row align-center m-left-auto g-10">
             <div style="background:goldenrod" class="p-10 align-center column br-5 g-5">
                <span>Earnings today</span>
                <strong>{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format($activities_earnings_today,2) }}</strong>
            </div>
             <div style="background:black;color:white;" class="p-10 align-center column br-5 g-5">
                <span>Withdrawals</span>
                <strong>{{ number_format($activities_withdrawals_this_month) }} this Month</strong>
            </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
            <span class="balance-name">Activities Balance</span>
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
             <strong style="font-size:2rem;" class="desc star">******</strong>
            <div onclick="
             event.stopPropagation();
if(this.closest('.balance-display').classList.contains('balance-hidden')){
            this.closest('.balance-display').classList.remove('balance-hidden');
            this.closest('.balance-display').classList.add('balance-shown');
            }else{
             this.closest('.balance-display').classList.remove('balance-shown');
             this.closest('.balance-display').classList.add('balance-hidden');
           
            }
            " style="color:rgb(32, 23, 1)" class="row align-center g-5">
                <div class="row align-center hide-balance-text g-5">
                    <span>Hide Balance</span>
                     <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2954 6.31064C22.6761 6.4738 22.8525 6.91471 22.6893 7.29543L22 6.99999C22.6893 7.29543 22.6894 7.29526 22.6893 7.29543L22.6886 7.29711L22.6875 7.2996L22.6843 7.30696L22.6737 7.33103C22.6647 7.35117 22.6519 7.37938 22.6353 7.41507C22.602 7.48642 22.5533 7.58774 22.4889 7.71415C22.36 7.9668 22.1676 8.32067 21.9085 8.73646C21.4829 9.4195 20.8724 10.2776 20.062 11.1302L21.0303 12.0985C21.3232 12.3914 21.3232 12.8663 21.0303 13.1592C20.7374 13.4521 20.2625 13.4521 19.9697 13.1592L18.9691 12.1586C18.3094 12.7113 17.5529 13.23 16.6951 13.6562L17.6286 15.091C17.8545 15.4381 17.7562 15.9027 17.409 16.1286C17.0618 16.3545 16.5973 16.2562 16.3713 15.909L15.2822 14.2351C14.5028 14.4896 13.659 14.6626 12.75 14.7246V16.5C12.75 16.9142 12.4142 17.25 12 17.25C11.5858 17.25 11.25 16.9142 11.25 16.5V14.7246C10.369 14.6645 9.54916 14.5002 8.78989 14.2584L7.71581 15.9091C7.48991 16.2563 7.02532 16.3546 6.67813 16.1287C6.33095 15.9028 6.23263 15.4382 6.45853 15.091L7.37095 13.6888C6.50657 13.2666 5.74387 12.7502 5.07848 12.1983L4.1175 13.1592C3.82461 13.4521 3.34974 13.4521 3.05684 13.1592C2.76395 12.8663 2.76395 12.3915 3.05684 12.0986L3.98061 11.1748C3.15605 10.3151 2.53531 9.44655 2.10283 8.75466C1.8399 8.33403 1.64466 7.97564 1.51394 7.71968C1.44854 7.59162 1.39916 7.48894 1.36543 7.41663C1.34856 7.38047 1.33559 7.35188 1.32648 7.33148L1.31568 7.30709L1.31244 7.29964L1.31135 7.29713L1.31095 7.29618C1.31087 7.296 1.31063 7.29543 1.99998 6.99999L1.31095 7.29618C1.14778 6.91546 1.32382 6.4738 1.70455 6.31064C2.08495 6.1476 2.52545 6.32354 2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361L2.6899 6.70581L2.69597 6.71952C2.70186 6.73271 2.71146 6.7539 2.72479 6.78247C2.75145 6.83963 2.79302 6.92624 2.84982 7.03747C2.96351 7.26009 3.13768 7.58027 3.37479 7.95959C3.85039 8.72047 4.57163 9.70708 5.55567 10.6216C6.42157 11.4263 7.48265 12.1676 8.75171 12.6558C9.7062 13.023 10.7854 13.25 12 13.25C13.2417 13.25 14.3421 13.0128 15.3125 12.6308C16.5739 12.1343 17.6277 11.3882 18.4867 10.582C19.4562 9.67196 20.1669 8.69515 20.6354 7.9432C20.869 7.5683 21.0406 7.25226 21.1526 7.03266C21.2086 6.92295 21.2495 6.83756 21.2758 6.78124C21.2889 6.75309 21.2983 6.73222 21.3041 6.71923L21.3101 6.70575L21.3106 6.70455C21.3107 6.70446 21.3106 6.70465 21.3106 6.70455M22.2954 6.31064C21.9148 6.14751 21.4739 6.32404 21.3106 6.70455ZM2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361Z" fill="CurrentColor"></path>
</svg>
               
                </div>
                 <div class="row align-center show-balance-text g-5">
                    <span>Show Balance</span>
               <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z" fill="CurrentColor"></path>
</svg>

                </div>

            </div>
        </div>
        <div class="align-center m-top-20 row g-10">
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/withdraw') }}')" style="background:rgb(32, 23, 1);color:gold" class="w-fit p-5 text-average p-x-20 br-1000">Withdraw</div>
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/transactions') }}')" style="background:transparent;color:rgb(32, 23, 1);border:1px solid rgb(32, 23, 1);" class="w-fit p-5 text-average p-x-20 br-1000">Transactions</div>
        </div>
        </div>

        <img style="right:10%;" src="{{ asset('images/IMG_1261-removebg-preview.png') }}" class="rep-img" alt="">
       </div>
{{-- WALLETS --}}
       <div style="background:rgb(108,92,230)" class="wallets activities"></div>
     <div style="background:navy" class="wallets all_time"></div>
       </div>
      </template>

      {{-- ALL TIME BALANCE TEMPLATE --}}
      <template class="all-time-wallet">
         <div onclick="
      
        this.outerHTML=document.querySelector('template.affiliate-wallet').innerHTML;
      
        " class="pos-relative balance-houses w-full">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs all-time-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
            <div>Welcome back 👋,<br><strong class="desc"> {{ ucfirst(strtolower(Auth::guard('users')->user()->username)) }}</strong></div>
           <div class="row align-center m-left-auto g-10">
             <div style="background:rgba(0,0,0,0.3)" class="p-10 align-center column br-5 g-5">
                <span>Earnings today</span>
                <strong>{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format($activities_earnings_today,2) }}</strong>
            </div>
             <div style="background:black;color:white;" class="p-10 align-center column br-5 g-5">
                <span>Withdrawals</span>
                <strong>{{ number_format($activities_withdrawals_this_month) }} this Month</strong>
            </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
            <span class="balance-name">Total Balance</span>
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
             <strong style="font-size:2rem;" class="desc star">******</strong>
            <div onclick="
             event.stopPropagation();
if(this.closest('.balance-display').classList.contains('balance-hidden')){
            this.closest('.balance-display').classList.remove('balance-hidden');
            this.closest('.balance-display').classList.add('balance-shown');
            }else{
             this.closest('.balance-display').classList.remove('balance-shown');
             this.closest('.balance-display').classList.add('balance-hidden');
           
            }
            " style="color:white" class="row align-center g-5">
                <div class="row align-center hide-balance-text g-5">
                    <span>Hide Balance</span>
                     <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2954 6.31064C22.6761 6.4738 22.8525 6.91471 22.6893 7.29543L22 6.99999C22.6893 7.29543 22.6894 7.29526 22.6893 7.29543L22.6886 7.29711L22.6875 7.2996L22.6843 7.30696L22.6737 7.33103C22.6647 7.35117 22.6519 7.37938 22.6353 7.41507C22.602 7.48642 22.5533 7.58774 22.4889 7.71415C22.36 7.9668 22.1676 8.32067 21.9085 8.73646C21.4829 9.4195 20.8724 10.2776 20.062 11.1302L21.0303 12.0985C21.3232 12.3914 21.3232 12.8663 21.0303 13.1592C20.7374 13.4521 20.2625 13.4521 19.9697 13.1592L18.9691 12.1586C18.3094 12.7113 17.5529 13.23 16.6951 13.6562L17.6286 15.091C17.8545 15.4381 17.7562 15.9027 17.409 16.1286C17.0618 16.3545 16.5973 16.2562 16.3713 15.909L15.2822 14.2351C14.5028 14.4896 13.659 14.6626 12.75 14.7246V16.5C12.75 16.9142 12.4142 17.25 12 17.25C11.5858 17.25 11.25 16.9142 11.25 16.5V14.7246C10.369 14.6645 9.54916 14.5002 8.78989 14.2584L7.71581 15.9091C7.48991 16.2563 7.02532 16.3546 6.67813 16.1287C6.33095 15.9028 6.23263 15.4382 6.45853 15.091L7.37095 13.6888C6.50657 13.2666 5.74387 12.7502 5.07848 12.1983L4.1175 13.1592C3.82461 13.4521 3.34974 13.4521 3.05684 13.1592C2.76395 12.8663 2.76395 12.3915 3.05684 12.0986L3.98061 11.1748C3.15605 10.3151 2.53531 9.44655 2.10283 8.75466C1.8399 8.33403 1.64466 7.97564 1.51394 7.71968C1.44854 7.59162 1.39916 7.48894 1.36543 7.41663C1.34856 7.38047 1.33559 7.35188 1.32648 7.33148L1.31568 7.30709L1.31244 7.29964L1.31135 7.29713L1.31095 7.29618C1.31087 7.296 1.31063 7.29543 1.99998 6.99999L1.31095 7.29618C1.14778 6.91546 1.32382 6.4738 1.70455 6.31064C2.08495 6.1476 2.52545 6.32354 2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361L2.6899 6.70581L2.69597 6.71952C2.70186 6.73271 2.71146 6.7539 2.72479 6.78247C2.75145 6.83963 2.79302 6.92624 2.84982 7.03747C2.96351 7.26009 3.13768 7.58027 3.37479 7.95959C3.85039 8.72047 4.57163 9.70708 5.55567 10.6216C6.42157 11.4263 7.48265 12.1676 8.75171 12.6558C9.7062 13.023 10.7854 13.25 12 13.25C13.2417 13.25 14.3421 13.0128 15.3125 12.6308C16.5739 12.1343 17.6277 11.3882 18.4867 10.582C19.4562 9.67196 20.1669 8.69515 20.6354 7.9432C20.869 7.5683 21.0406 7.25226 21.1526 7.03266C21.2086 6.92295 21.2495 6.83756 21.2758 6.78124C21.2889 6.75309 21.2983 6.73222 21.3041 6.71923L21.3101 6.70575L21.3106 6.70455C21.3107 6.70446 21.3106 6.70465 21.3106 6.70455M22.2954 6.31064C21.9148 6.14751 21.4739 6.32404 21.3106 6.70455ZM2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361Z" fill="CurrentColor"></path>
</svg>
               
                </div>
                 <div class="row align-center show-balance-text g-5">
                    <span>Show Balance</span>
               <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z" fill="CurrentColor"></path>
</svg>

                </div>

            </div>
        </div>
        <div class="align-center m-top-20 row g-10">
            <div style="background:white;color:rgb(108,92,230)" class="w-fit p-5 text-average p-x-20 br-1000">Breakdown</div>
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/transactions') }}')" style="background:transparent;color:white;border:1px solid white;" class="w-fit p-5 text-average p-x-20 br-1000">Transactions</div>
        </div>
        </div>

        <img style="right:10%;" src="{{ asset('images/9688bf8d-a5cd-4dea-aee5-e689379febc0-removebg-preview 2.png') }}" class="rep-img" alt="">
       </div>
{{-- WALLETS --}}
       <div style="background:var(--primary)" class="wallets activities"></div>
     <div style="background:gold" class="wallets all_time"></div>
       </div>

      </template>

       {{-- TEMPLATES END --}}
   
   
     </div>
{{-- MARGINALIZE --}}
    <div class="marginalize"></div>
   {{-- QUICK LINKS --}}
       <strong class="desc">Quick Links</strong>
       <section style="padding-top:5px;" class="grid quick-links p-20 grid-4 w-full place-center g-10">
        <div onclick="spa(event,'{{ url('users/bank/add') }}')" class="column bg-light g-10 br-10 justify-center w-full perfect-square quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(0,255,0,0.1);color:#4caf50;" class=" h-40 w-40 br-10 justify-center column">
               <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.052 1.25H11.948C11.0495 1.24997 10.3003 1.24995 9.70552 1.32991C9.07773 1.41432 8.51093 1.59999 8.05546 2.05546C7.59999 2.51093 7.41432 3.07773 7.32991 3.70552C7.27259 4.13189 7.25637 5.15147 7.25179 6.02566C5.22954 6.09171 4.01536 6.32778 3.17157 7.17157C2 8.34315 2 10.2288 2 14C2 17.7712 2 19.6569 3.17157 20.8284C4.34314 22 6.22876 22 9.99998 22H14C17.7712 22 19.6569 22 20.8284 20.8284C22 19.6569 22 17.7712 22 14C22 10.2288 22 8.34315 20.8284 7.17157C19.9846 6.32778 18.7705 6.09171 16.7482 6.02566C16.7436 5.15147 16.7274 4.13189 16.6701 3.70552C16.5857 3.07773 16.4 2.51093 15.9445 2.05546C15.4891 1.59999 14.9223 1.41432 14.2945 1.32991C13.6997 1.24995 12.9505 1.24997 12.052 1.25ZM15.2479 6.00188C15.2434 5.15523 15.229 4.24407 15.1835 3.9054C15.1214 3.44393 15.0142 3.24644 14.8839 3.11612C14.7536 2.9858 14.5561 2.87858 14.0946 2.81654C13.6116 2.7516 12.964 2.75 12 2.75C11.036 2.75 10.3884 2.7516 9.90539 2.81654C9.44393 2.87858 9.24644 2.9858 9.11612 3.11612C8.9858 3.24644 8.87858 3.44393 8.81654 3.9054C8.771 4.24407 8.75661 5.15523 8.75208 6.00188C9.1435 6 9.55885 6 10 6H14C14.4412 6 14.8565 6 15.2479 6.00188ZM12 9.25C12.4142 9.25 12.75 9.58579 12.75 10V10.0102C13.8388 10.2845 14.75 11.143 14.75 12.3333C14.75 12.7475 14.4142 13.0833 14 13.0833C13.5858 13.0833 13.25 12.7475 13.25 12.3333C13.25 11.9493 12.8242 11.4167 12 11.4167C11.1758 11.4167 10.75 11.9493 10.75 12.3333C10.75 12.7174 11.1758 13.25 12 13.25C13.3849 13.25 14.75 14.2098 14.75 15.6667C14.75 16.857 13.8388 17.7155 12.75 17.9898V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.9898C10.1612 17.7155 9.25 16.857 9.25 15.6667C9.25 15.2525 9.58579 14.9167 10 14.9167C10.4142 14.9167 10.75 15.2525 10.75 15.6667C10.75 16.0507 11.1758 16.5833 12 16.5833C12.8242 16.5833 13.25 16.0507 13.25 15.6667C13.25 15.2826 12.8242 14.75 12 14.75C10.6151 14.75 9.25 13.7903 9.25 12.3333C9.25 11.143 10.1612 10.2845 11.25 10.0102V10C11.25 9.58579 11.5858 9.25 12 9.25Z" fill="CurrentColor"></path>
</svg>

            </div>
            <strong>Bank</strong>
           </div>
        </div>
        {{-- NEW QUICK LINK --}}
          <div onclick="spa(event,'{{ url('users/team') }}')" class="column bg-light g-10 br-10 justify-center w-full perfect-square quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(0,0,255,0.1);color:blue;" class=" h-40 w-40 br-10 justify-center column">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="CurrentColor"></path>
<path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="CurrentColor"></path>
<path d="M7.12205 5C7.29951 5 7.47276 5.01741 7.64005 5.05056C7.23249 5.77446 7 6.61008 7 7.5C7 8.36825 7.22131 9.18482 7.61059 9.89636C7.45245 9.92583 7.28912 9.94126 7.12205 9.94126C5.70763 9.94126 4.56102 8.83512 4.56102 7.47063C4.56102 6.10614 5.70763 5 7.12205 5Z" fill="CurrentColor"></path>
<path d="M5.44734 18.986C4.87942 18.3071 4.5 17.474 4.5 16.5C4.5 15.5558 4.85657 14.744 5.39578 14.0767C3.4911 14.2245 2 15.2662 2 16.5294C2 17.8044 3.5173 18.8538 5.44734 18.986Z" fill="CurrentColor"></path>
<path d="M16.9999 7.5C16.9999 8.36825 16.7786 9.18482 16.3893 9.89636C16.5475 9.92583 16.7108 9.94126 16.8779 9.94126C18.2923 9.94126 19.4389 8.83512 19.4389 7.47063C19.4389 6.10614 18.2923 5 16.8779 5C16.7004 5 16.5272 5.01741 16.3599 5.05056C16.7674 5.77446 16.9999 6.61008 16.9999 7.5Z" fill="CurrentColor"></path>
<path d="M18.5526 18.986C20.4826 18.8538 21.9999 17.8044 21.9999 16.5294C21.9999 15.2662 20.5088 14.2245 18.6041 14.0767C19.1433 14.744 19.4999 15.5558 19.4999 16.5C19.4999 17.474 19.1205 18.3071 18.5526 18.986Z" fill="CurrentColor"></path>
</svg>


            </div>
            <strong>Team</strong>
           </div>
        </div>
         {{-- NEW QUICK LINK --}}
          <div onclick="spa(event,'{{ url('users/airtime/topup') }}')" class="column bg-light g-10 br-10 justify-center w-full perfect-square quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(187, 255, 0, 0.1);color:rgb(229, 255, 0);" class=" h-40 w-40 br-10 justify-center column">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M14.25 12C14.25 11.0335 15.0335 10.25 16 10.25C16.9665 10.25 17.75 11.0335 17.75 12C17.75 12.9665 16.9665 13.75 16 13.75C15.0335 13.75 14.25 12.9665 14.25 12Z" fill="CurrentColor"></path>
<path d="M8 13.75C8.9665 13.75 9.75 12.9665 9.75 12C9.75 11.0335 8.9665 10.25 8 10.25C7.0335 10.25 6.25 11.0335 6.25 12C6.25 12.9665 7.0335 13.75 8 13.75Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447ZM13.2609 13.75C12.9375 13.2449 12.75 12.6443 12.75 12C12.75 10.2051 14.2051 8.75 16 8.75C17.7949 8.75 19.25 10.2051 19.25 12C19.25 13.7949 17.7949 15.25 16 15.25H8C6.20507 15.25 4.75 13.7949 4.75 12C4.75 10.2051 6.20507 8.75 8 8.75C9.79493 8.75 11.25 10.2051 11.25 12C11.25 12.6443 11.0625 13.2449 10.7391 13.75H13.2609Z" fill="CurrentColor"></path>
</svg>



            </div>
            <strong>Airtime</strong>
           </div>
        </div>
         {{-- NEW QUICK LINK --}}
          <div onclick="spa(event,'{{ url('users/data/topup') }}')" class="column bg-light g-10 br-10 justify-center w-full perfect-square quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(255, 0, 234, 0.1);color:rgb(255, 0, 221);" class=" h-40 w-40 br-10 justify-center column">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.03471C9.3028 8.03471 7.11628 10.1864 7.11628 12.8406C7.11628 14.1679 7.66214 15.3684 8.54669 16.2388C8.81915 16.5069 8.81915 16.9417 8.54669 17.2098C8.27423 17.4779 7.83249 17.4779 7.56003 17.2098C6.4245 16.0923 5.72093 14.5467 5.72093 12.8406C5.72093 9.42803 8.53217 6.66161 12 6.66161C15.4678 6.66161 18.2791 9.42803 18.2791 12.8406C18.2791 14.5467 17.5755 16.0923 16.44 17.2098C16.1675 17.4779 15.7258 17.4779 15.4533 17.2098C15.1809 16.9417 15.1809 16.5069 15.4533 16.2388C16.3379 15.3684 16.8837 14.1679 16.8837 12.8406C16.8837 10.1864 14.6972 8.03471 12 8.03471Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 4.3731C7.24778 4.3731 3.39535 8.16412 3.39535 12.8406C3.39535 15.179 4.35769 17.2949 5.91559 18.828C6.18805 19.0961 6.18805 19.5308 5.91559 19.7989C5.64313 20.067 5.20139 20.067 4.92893 19.7989C3.12005 18.0189 2 15.5578 2 12.8406C2 7.40578 6.47715 3 12 3C17.5228 3 22 7.40578 22 12.8406C22 15.5578 20.8799 18.0189 19.0711 19.7989C18.7986 20.067 18.3569 20.067 18.0844 19.7989C17.8119 19.5308 17.8119 19.0961 18.0844 18.828C19.6423 17.2949 20.6047 15.179 20.6047 12.8406C20.6047 8.16412 16.7522 4.3731 12 4.3731Z" fill="CurrentColor"></path>
<path d="M10.3099 17.3441C11.0774 16.4683 11.4612 16.0304 11.935 16.002C11.9783 15.9993 12.0217 15.9993 12.065 16.002C12.5389 16.0304 12.9226 16.4683 13.6901 17.3441C15.3601 19.2497 16.1951 20.2025 15.9613 21.0245C15.9412 21.0952 15.9163 21.1639 15.8867 21.2301C15.5426 22 14.3617 22 12 22C9.63827 22 8.45741 22 8.11329 21.2301C8.08371 21.1639 8.05875 21.0952 8.03866 21.0245C7.80489 20.2025 8.63989 19.2497 10.3099 17.3441Z" fill="CurrentColor"></path>
<path d="M14.5 12.5C14.5 13.8807 13.3807 15 12 15C10.6193 15 9.5 13.8807 9.5 12.5C9.5 11.1193 10.6193 10 12 10C13.3807 10 14.5 11.1193 14.5 12.5Z" fill="CurrentColor"></path>
</svg>



            </div>
            <strong>Data</strong>
           </div>
        </div>
       </section>
       <strong class="desc">Affiliate Link</strong>
        <div style="border:1px solid var(--bg-lighter)" class="w-full bg-light g-5 secondary-text br-0 p-10 row space-between align-center">
            <div class="w-full h-40 no-scrollbar align-center row ws-nowrap overflow-auto p-5 br-10 bg-secondary-transparent">{{ url('register/'.Auth::guard('users')->user()->username.'') }}</div>
            <div onclick="copy('{{ url('register/'.Auth::guard('users')->user()->username.'') }}')" style="border:1px solid var(--bg-lighter)" class="h-40 perfect-square column justify-center">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M20.0616 12.6473L20.5793 10.7154C21.1835 8.46034 21.4856 7.3328 21.2581 6.35703C21.0785 5.58657 20.6744 4.88668 20.097 4.34587C19.3657 3.66095 18.2381 3.35883 15.9831 2.75458C13.728 2.15033 12.6004 1.84821 11.6247 2.07573C10.8542 2.25537 10.1543 2.65945 9.61351 3.23687C9.02709 3.86298 8.72128 4.77957 8.26621 6.44561C8.18979 6.7254 8.10915 7.02633 8.02227 7.35057L8.02222 7.35077L7.50458 9.28263C6.90033 11.5377 6.59821 12.6652 6.82573 13.641C7.00537 14.4115 7.40945 15.1114 7.98687 15.6522C8.71815 16.3371 9.84569 16.6392 12.1008 17.2435L12.1008 17.2435C14.1334 17.7881 15.2499 18.0873 16.165 17.9744C16.2652 17.9621 16.3629 17.9448 16.4592 17.9223C17.2296 17.7427 17.9295 17.3386 18.4703 16.7612C19.1552 16.0299 19.4574 14.9024 20.0616 12.6473Z" fill="CurrentColor"></path>
<path d="M2.50458 14.715L3.02222 16.6469C3.62647 18.902 3.92859 20.0295 4.61351 20.7608C5.15432 21.3382 5.85421 21.7423 6.62466 21.9219C7.60044 22.1494 8.72798 21.8473 10.9831 21.2431C13.2381 20.6388 14.3657 20.3367 15.097 19.6518C15.1577 19.5949 15.2164 19.5363 15.2733 19.4761C14.9391 19.448 14.602 19.3942 14.2594 19.3261C13.5633 19.1877 12.7362 18.9661 11.758 18.704L11.6512 18.6753L11.6264 18.6687C10.5621 18.3835 9.67281 18.1448 8.96277 17.8883C8.21607 17.6185 7.5376 17.286 6.96148 16.7464C6.16753 16.0028 5.61193 15.0404 5.36491 13.9811C5.18567 13.2123 5.23691 12.4585 5.37666 11.6769C5.51058 10.928 5.75109 10.0305 6.03926 8.95515L6.03926 8.95514L6.57365 6.96077L6.59245 6.89062C4.6719 7.40799 3.66101 7.71408 2.98687 8.34548C2.40945 8.88629 2.00537 9.58617 1.82573 10.3566C1.59821 11.3324 1.90033 12.4599 2.50458 14.715Z" fill="CurrentColor"></path>
</svg>

            </div>
        </div>
        
        <div class="w-full no-select m-x-auto align-center p-20 column g-5 bg-light br-10 p-10">
                <strong class="font-1 m-right-auto row">Join Our Community</strong>
                <span>Get the latest news, tips, and exclusive content. Join our communities on WhatApp and Telegram to connect with us and others.</span>
           
       <div class="grid place-center m-left-auto w-full g-10 align-center">
        <div onclick="window.open('{{ $social->whatsapp }}')" class="bg-green g-5 align-center pc-max-w-half c-white row justify-center h-50 p-10 bold w-full br-1000">
            Join our Whatsapp Group
          


        </div>
         <div onclick="window.open('{{ $social->telegram }}')" style="box-shadow:inset 0 0 20px navy;background:blue" class="bg-navy g-5 align-center pc-max-w-half m-right-auto c-white row justify-center h-50 p-10 bold w-full br-1000">
            Join our Telegram Group
        


        </div>
       </div>
        </div>
    
        @if (!$transactions->isEmpty())
            <div class="row w-full g-10 align-center space-between">
                <strong class="desc m-top-20" style="font-weight:900">Recent Transactions</strong>
                <strong style="color:var(--primary-light)" onclick="spa(event,'{{ url('users/transactions') }}')" class="c-primary-light pointer u no-select">View All</strong>
            </div>
              @foreach ($transactions as $data)
                <div style="border:1px solid var(--bg-lighter)" onclick="spa(event,'{{ url('users/transaction/receipt?id='.$data->id.'') }}')" class="w-full bg-light p-20 br-10 row align-center g-10 space-between">
                    <div class="h-30 {{ $data->class == 'credit' ? 'c-green' : 'c-red' }} w-30 column svg justify-center circle clip-circle" style="background:var(--bg-lighter)">
                        @if ($data->class == 'credit')
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C12.4142 3.25 12.75 3.58579 12.75 4L12.75 18.1893L17.4697 13.4697C17.7626 13.1768 18.2374 13.1768 18.5303 13.4697C18.8232 13.7626 18.8232 14.2374 18.5303 14.5303L12.5303 20.5303C12.3897 20.671 12.1989 20.75 12 20.75C11.8011 20.75 11.6103 20.671 11.4697 20.5303L5.46967 14.5303C5.17678 14.2374 5.17678 13.7626 5.46967 13.4697C5.76256 13.1768 6.23744 13.1768 6.53033 13.4697L11.25 18.1893L11.25 4C11.25 3.58579 11.5858 3.25 12 3.25Z" fill="CurrentColor"></path>
</svg>

                        @else
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.4697 3.46967C11.7626 3.17678 12.2374 3.17678 12.5303 3.46967L18.5303 9.46967C18.8232 9.76256 18.8232 10.2374 18.5303 10.5303C18.2374 10.8232 17.7626 10.8232 17.4697 10.5303L12.75 5.81066L12.75 20C12.75 20.4142 12.4142 20.75 12 20.75C11.5858 20.75 11.25 20.4142 11.25 20L11.25 5.81066L6.53033 10.5303C6.23744 10.8232 5.76256 10.8232 5.46967 10.5303C5.17678 10.2374 5.17678 9.76256 5.46967 9.46967L11.4697 3.46967Z" fill="CurrentColor"></path>
</svg>

                        @endif

                    </div>
               <div class="column g-2 m-right-auto">
                <strong class="font-1">{{ $data->type }}</strong>
                <span class="text-average text-dim">{{ $data->date }}</span>
               </div>
               <div class="column align-center g-2">
            
                  <strong class="font-1">- {!! Currency(Auth::guard('users')->user()->id)  !!}
                {{ number_format($data->amount,2) }}</strong> 
             
                <div class="row m-left-auto {{ $data->status == 'success' ? 'c-green' : ($data->status == 'rejected' ? 'c-red' : 'c-gold') }}">{{ $data->status }}</div>
               </div>
                </div>
            @endforeach
        @endif
    </section>
  @include('components.sections',[
    'populate' => true
  ])
@endsection
@section('popup')
    <div class="column p-10 g-10">
        <img src="{{ asset('banners/eb4c53bd-8a10-47f0-8570-a43582d1b9eb.jpeg') }}" alt="" class="w-full br-10">
    <div class=" bold text-center w-full">
        {!! nl2br($social->notification) !!}
         </div>
         <div class="w-full chat-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>





                        <span>Join our Whatsapp Group</span>
         </div>
    </div>
@endsection
@section('js')
    <script class="js">
        PopUp();
        window.MyFunc ={
           Style : function(){
           try{
            document.querySelectorAll('.balance-divs').forEach((div)=>{
            
                div.style.minHeight=div.querySelector('.rep-img').getBoundingClientRect().height + 'px';
            })
         //   alert(document.querySelectorAll('.wallets')[document.querySelectorAll('.wallets').length - 1].getBoundingClientRect().bottom)
            document.querySelector('.marginalize').style.marginTop=Math.abs(document.querySelectorAll('.wallets')[0].getBoundingClientRect().top - document.querySelectorAll('.wallets')[document.querySelectorAll('.wallets').length - 1].getBoundingClientRect().bottom) + 'px' 
           

           }catch(error){
            alert(error.stack);
           }
           } ,
           Redeemed : function(response,event){
            let data=JSON.parse(response);
          
            document.querySelector('.prompt.' + data.status).innerHTML=(data.message).toUpperCase();
           document.querySelector('.prompt.' + data.status).classList.remove('display-none');
           if(data.status == 'success'){
            document.querySelector('.close-modal').onclick=function(){
                spa(event,'{{ url()->current() }}');
            }
           }else{
              document.querySelector('.close-modal').onclick=function(){
                document.querySelector('.populate').classList.add('display-none');
                 document.querySelector('.populate').classList.remove('shown');
            document.body.classList.remove('overflow-hidden')
            }
            
           }

           }
        }
        MyFunc.Style();
    </script>
@endsection