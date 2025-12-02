@extends('layout.users.index')
@section('title')
    Homepage
@endsection
@section('css')
    <style class="css">
        .observe{
            opacity:0;
        }
        .observe.scale-in{
            animation:scale-in 1.0s ease forwards;
        }
        .observe.scale-out{
            animation:scale-out 1.0s ease forwards;
        }

        @keyframes scale-in{
            0%{
                transform:scale(0.8);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
          @keyframes scale-out{
            0%{
                transform:scale(1.2);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
        .observe.trans-up{
            animation:trans-up 1s ease forwards;
        }
        @keyframes trans-up{
            0%{
                opacity:0;
                transform:translateY(30px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.trans-from-left{
            animation:trans-from-left 2s ease forwards;
        }
        @keyframes trans-from-left{
            0%{
                opacity:0;
                transform:translateX(-50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
         .observe.trans-from-right{
            animation:trans-from-right 2s ease forwards;
        }
        @keyframes trans-from-right{
            0%{
                opacity:0;
                transform:translateX(50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
          .observe.trans-from-bottom{
            animation:trans-from-bottom 2s ease forwards;
        }
        @keyframes trans-from-bottom{
            0%{
                opacity:0;
                transform:translateY(50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
                  .observe.trans-from-top{
            animation:trans-from-top 2s ease forwards;
        }
        @keyframes trans-from-top{
            0%{
                opacity:0;
                transform:translateY(-50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.rotate-in-from-left{
            animation:rotate-in-from-left 1s ease forwards;
        }
        @keyframes rotate-in-from-left{
            0%{
                transform:rotate(-90deg) translateX(-200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
        .observe.rotate-in-from-right{
            animation:rotate-in-from-right 1s ease forwards;
        }
        @keyframes rotate-in-from-right{
            0%{
                transform:rotate(90deg) translateX(200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-top{
            animation:rotate-in-from-top 1s ease forwards;
        }
        @keyframes rotate-in-from-top{
            0%{
                transform:rotate(45deg) translateY(50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-bottom{
            animation:rotate-in-from-bottom 1s ease forwards;
        }
        @keyframes rotate-in-from-bottom{
            0%{
                transform:rotate(-180deg) translateY(-50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
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
        .features-card{
            display:flex;
            flex-direction:column;
            gap:10px;
            padding:10px;
            border:1px solid var(--bg-lighter);
            background:var(--bg-light);
            border-radius:10px;
            align-items:center;

        }
        .features-card .symbol{
            background:var(--gradient);
            padding:10px;
            border-radius:50%;
            height:70px;
            width:70px;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .features-title{
            font-weight:800;
            font-size:1.5rem;

        }
        .features-details{
            color:silver;
        }
        .faq .answer{
            display:none;
        }
        .faq .question *{
            transition: all 0.5s ease;
        }
        .faq.active .question .icon{
            background:var(--gradient);
            box-shadow: 0 0 10px var(--primary-brighter);
          

        }
         .faq.active .question .icon svg{
          transform:rotate(90deg);
          

        }
        .faq.active .question{
            display:flex;
        }
        .faq.active .answer{
            display:flex;
        }
         .get-started-btn{
            position: relative;
         }
        .get-started-btn::before{
            content:'';
            position:absolute;
            left:0;
            top:0;
            bottom:0;
            background:linear-gradient(to right,transparent,rgba(255,255,255,0.5),transparent,transparent);
            width:100%;
            animation:shiny 2s linear infinite;
            transform:skew(40deg)
        }
        @keyframes shiny{
            0%{
                left:-25%;
            }
            25%{
                left:25%;
            }
            50%{
                left:50%;
            }
            75%{
                left:75%;
            }
            100%{
                left:100%
            }
        }

    </style>
@endsection
@section('main')
    <section class="w-full align-center  g-10 column p-10">
           
        <div class="hero-title">
            Unlock Your Financial Potential Through Diversified Digital Income Streams
        </div>
        
        <span class="text-center">
           {{ config('app.name') }} provides a seamless platform that compensates users for everyday online activities. Whether you're reading articles, developing skills, or engaging with social media, our innovative system transforms your digital engagement into tangible earnings.

        </span>
       <div style="padding-top:20px;padding-bottom:20px;" class="grid pc-grid-2 w-full g-10 m-y-20">
        <div onclick="window.location.href='{{ url('register') }}'" style="background: var(--primary-bright);color:white;" class="h-50 pointer get-started-btn w-full bold row g-10 justify-center p-10 br-5 clip-5">
        Get Started
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
    <div onclick="window.location.href='{{ url('login') }}'" style="border:1px solid var(--bg-lighter);color:silver;background:transparent" class="h-50 pointer clip-5 w-full bold row g-10 justify-center p-10 br-5">
        Login
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
       </div>
       
         <img data-class='scale-in' src="{{ asset('banners/f995f233-1883-42db-aff6-de3150b61fbd.jpeg') }}" alt="" class="w-full m-x-auto observe br-10 max-w-500">
        
       
        <span class="hero-title">{{ config('app.name') }} Amazing Features</span>
        <div class="grid p-20 pc-grid-2 w-full g-10">
            <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M8.38729 5.07916C8.2258 4.8117 8.05626 4.56198 7.8878 4.3346C9.04232 3.49515 10.4633 3 12 3C13.32 3 14.5547 3.36536 15.6084 4.00047C15.5932 4.08959 15.5717 4.19054 15.5419 4.30292C15.4363 4.70203 15.2701 5.08295 15.1288 5.3053C15.0801 5.38197 14.8798 5.5778 14.5164 5.84854C14.3544 5.96924 14.1745 6.08008 13.9603 6.20811L13.886 6.25243C13.6985 6.36416 13.4839 6.49199 13.2771 6.63373C12.7891 6.96807 12.2809 7.41998 11.9391 8.15075C11.6919 8.67927 11.7089 9.19402 11.8182 9.60686C11.8539 9.74163 11.8735 9.87731 11.8738 9.99652C11.8739 10.0336 11.8594 10.0928 11.7766 10.1619C11.6876 10.2363 11.5622 10.2812 11.4495 10.28C10.3725 10.2678 9.52299 9.37575 9.3997 7.95271C9.306 6.8712 8.8641 5.86882 8.38729 5.07916Z" fill="CurrentColor"></path>
<path d="M16.6517 14.5089C16.9162 14.5062 17.1643 14.4888 17.3969 14.4582C16.5193 15.5195 15.3346 16.3175 13.9791 16.7163C13.9326 16.3349 13.9631 15.8766 14.1879 15.4531C14.3798 15.0914 14.8657 14.8197 15.5216 14.6585C15.8229 14.5844 16.1094 14.5464 16.3222 14.5273C16.4277 14.5179 16.5125 14.5133 16.569 14.511C16.5972 14.5099 16.6181 14.5094 16.6308 14.5092L16.6429 14.509L16.6517 14.5089Z" fill="CurrentColor"></path>
<path d="M5 10C5 8.28063 5.6199 6.70604 6.64838 5.48753C6.74956 5.63106 6.85097 5.78497 6.94913 5.94753C7.35056 6.61238 7.66238 7.36367 7.72597 8.09772C7.89674 10.0688 9.20746 11.9347 11.4305 11.9599C12.3923 11.9708 13.5569 11.2479 13.5538 9.99234C13.5531 9.70484 13.5079 9.42468 13.4423 9.17689C13.4107 9.05761 13.4152 8.96019 13.4609 8.86248C13.6314 8.49787 13.8831 8.25497 14.2266 8.01963C14.3866 7.91002 14.5529 7.81086 14.7452 7.69614L14.8222 7.65014C15.0375 7.52146 15.283 7.37244 15.5202 7.1957C15.865 6.93877 16.3107 6.57794 16.5468 6.20623C16.7338 5.912 16.907 5.5347 17.0412 5.14341C18.2541 6.40212 19 8.11395 19 10C19 10.5323 18.9406 11.0508 18.828 11.5491C18.7606 11.7487 18.6766 11.9352 18.5253 12.1315C18.2881 12.4393 17.8131 12.8167 16.6342 12.829L16.6282 12.829L16.5995 12.8295C16.5758 12.8299 16.5432 12.8307 16.5027 12.8323C16.4218 12.8355 16.3087 12.8418 16.1721 12.8541C15.9008 12.8784 15.5264 12.9273 15.1206 13.027C14.3624 13.2134 13.2498 13.6368 12.7039 14.6656C12.2731 15.4773 12.2246 16.3106 12.3216 16.9927C12.215 16.9976 12.1078 17 12 17C8.13401 17 5 13.866 5 10Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.0035 1.49982C18.2797 1.19118 18.7539 1.16491 19.0625 1.44116C21.3246 3.4658 22.75 6.41044 22.75 9.687C22.75 15.4384 18.3612 20.1647 12.75 20.6996V21.25H14C14.4142 21.25 14.75 21.5858 14.75 22C14.75 22.4142 14.4142 22.75 14 22.75H10C9.58579 22.75 9.25001 22.4142 9.25001 22C9.25001 21.5858 9.58579 21.25 10 21.25H11.25V20.7415C8.14923 20.621 5.37537 19.2236 3.44116 17.0625C3.16491 16.7539 3.19118 16.2797 3.49982 16.0035C3.80847 15.7272 4.28261 15.7535 4.55886 16.0622C6.31098 18.0198 8.85483 19.25 11.687 19.25C16.9685 19.25 21.25 14.9685 21.25 9.687C21.25 6.85483 20.0198 4.31098 18.0622 2.55886C17.7535 2.28261 17.7272 1.80847 18.0035 1.49982Z" fill="CurrentColor"></path>
</svg>

                </div>
                <strong class="features-title">Worldwide Global Recognition</strong>
                <span class="features-details">Our platform is recognized and trusted by users across the globe, providing opportunities for international earnings.</span>
            </div>
             <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M2 12.124C2 6.53269 6.47713 2 11.9999 2C17.5228 2 21.9999 6.53269 21.9999 12.124L21.9999 17.3675C22.0002 18.1844 22.0004 18.7446 21.8568 19.2364C21.576 20.1982 20.9046 20.9937 20.01 21.4245C19.5525 21.6449 19.0059 21.732 18.2088 21.8591L18.0789 21.8799C17.7954 21.9252 17.5532 21.9639 17.3522 21.9839C17.1431 22.0047 16.9299 22.0111 16.7118 21.9676C15.9942 21.8245 15.4024 21.3126 15.1508 20.6172C15.0744 20.4059 15.0474 20.1916 15.035 19.9793C15.0232 19.7753 15.0232 19.527 15.0232 19.2365L15.0231 15.0641C15.0226 14.6386 15.0222 14.2725 15.1195 13.959C15.3422 13.2416 15.9238 12.6975 16.6477 12.5292C16.9641 12.4556 17.3246 12.4849 17.7435 12.5189L17.8367 12.5264L17.9465 12.5352C18.7302 12.5975 19.2664 12.6402 19.7216 12.8106C20.0415 12.9304 20.3381 13.0953 20.6046 13.2976V12.124C20.6046 7.31288 16.7521 3.41266 11.9999 3.41266C7.24776 3.41266 3.39534 7.31288 3.39534 12.124V13.2976C3.66176 13.0953 3.95843 12.9304 4.27829 12.8106C4.73345 12.6402 5.26965 12.5975 6.05335 12.5352L6.16318 12.5264L6.25641 12.5189C6.67534 12.4849 7.03581 12.4556 7.35224 12.5292C8.07612 12.6975 8.65766 13.2416 8.88039 13.959C8.97774 14.2725 8.9773 14.6386 8.97678 15.0641L8.97671 19.2365C8.97671 19.527 8.97672 19.7753 8.96487 19.9793C8.95254 20.1916 8.9255 20.4059 8.84906 20.6172C8.59754 21.3126 8.00574 21.8245 7.28812 21.9676C7.07001 22.0111 6.85675 22.0047 6.64768 21.9839C6.44671 21.9639 6.20449 21.9252 5.92102 21.8799L5.79106 21.8591C4.99399 21.732 4.44737 21.6449 3.98991 21.4245C3.09534 20.9937 2.42388 20.1982 2.14308 19.2364C2.02467 18.8309 2.00404 18.3788 2.0006 17.7747L2 17.5803V12.124Z" fill="CurrentColor"></path>
</svg>


                </div>
                <strong class="features-title">24/7 Customer Support</strong>
                <span class="features-details">Round-the-clock assistance ensures you have help whenever you need it, day or night.</span>
            </div>
            <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                  <svg width="40" height="40" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M7.75 2.5C7.75 2.08579 7.41421 1.75 7 1.75C6.58579 1.75 6.25 2.08579 6.25 2.5V4.07926C4.81067 4.19451 3.86577 4.47737 3.17157 5.17157C2.47737 5.86577 2.19451 6.81067 2.07926 8.25H21.9207C21.8055 6.81067 21.5226 5.86577 20.8284 5.17157C20.1342 4.47737 19.1893 4.19451 17.75 4.07926V2.5C17.75 2.08579 17.4142 1.75 17 1.75C16.5858 1.75 16.25 2.08579 16.25 2.5V4.0129C15.5847 4 14.839 4 14 4H10C9.16097 4 8.41527 4 7.75 4.0129V2.5Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 11.161 2 10.4153 2.0129 9.75H21.9871C22 10.4153 22 11.161 22 12ZM16.5 18C17.3284 18 18 17.3284 18 16.5C18 15.6716 17.3284 15 16.5 15C15.6716 15 15 15.6716 15 16.5C15 17.3284 15.6716 18 16.5 18Z" fill="CurrentColor"></path>
</svg>


                </div>
                <strong class="features-title">Weekly Salary Payouts</strong>
                <span class="features-details">Consistent weekly earnings for all active users, providing reliable income streams.</span>
            </div>
              <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                  <svg width="40" height="40" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM10.6935 15.8458L15.4137 13.059C16.1954 12.5974 16.1954 11.4026 15.4137 10.941L10.6935 8.15419C9.93371 7.70561 9 8.28947 9 9.21316V14.7868C9 15.7105 9.93371 16.2944 10.6935 15.8458Z" fill="CurrentColor"></path>
</svg>



                </div>
                <strong class="features-title">Unlimited Streaming Earnings</strong>
                <span class="features-details">Stream content and earn unlimited times with our innovative compensation model.</span>
            </div>
             <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                  <svg width="40" height="40" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 12V8C2 5.17157 2 3.75736 2.87868 2.87868C3.75736 2 5.17157 2 8 2H16C18.8284 2 20.2426 2 21.1213 2.87868C22 3.75736 22 5.17157 22 8V12C22 14.8284 22 16.2426 21.1213 17.1213C20.4749 17.7677 19.5388 17.9386 17.963 17.9838C17.9593 17.248 17.7037 16.5132 17.1961 15.9176C17.1674 15.8839 17.1501 15.842 17.1465 15.7979C17.0211 14.2264 15.7733 12.9785 14.2018 12.8531C14.1577 12.8496 14.1158 12.8322 14.0821 12.8035C12.8822 11.781 11.1174 11.781 9.91755 12.8035C9.88386 12.8322 9.84198 12.8496 9.79786 12.8531C8.22638 12.9785 6.9785 14.2264 6.85309 15.7979C6.84957 15.842 6.83222 15.8839 6.80352 15.9176C6.29595 16.5132 6.04033 17.248 6.03666 17.9838C4.4611 17.9386 3.52501 17.7677 2.87868 17.1213C2 16.2426 2 14.8284 2 12ZM8.25 6C8.25 5.58579 8.58579 5.25 9 5.25H15C15.4142 5.25 15.75 5.58579 15.75 6C15.75 6.41421 15.4142 6.75 15 6.75H9C8.58579 6.75 8.25 6.41421 8.25 6ZM7 8.75C6.58579 8.75 6.25 9.08579 6.25 9.5C6.25 9.91421 6.58579 10.25 7 10.25H17C17.4142 10.25 17.75 9.91421 17.75 9.5C17.75 9.08579 17.4142 8.75 17 8.75H7Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.1092 13.9452C12.4699 13.4004 11.5297 13.4004 10.8905 13.9452C10.6165 14.1786 10.276 14.3197 9.91719 14.3483C9.07997 14.4152 8.41515 15.08 8.34834 15.9172C8.31971 16.276 8.17863 16.6165 7.94519 16.8905C7.40043 17.5297 7.40043 18.4699 7.94519 19.1092C8.17863 19.3831 8.31971 19.7237 8.34834 20.0824C8.41515 20.9197 9.07997 21.5845 9.91719 21.6513C10.276 21.6799 10.6165 21.821 10.8905 22.0544C11.5297 22.5992 12.4699 22.5992 13.1092 22.0544C13.3831 21.821 13.7237 21.6799 14.0824 21.6513C14.9197 21.5845 15.5845 20.9197 15.6513 20.0824C15.6799 19.7237 15.821 19.3831 16.0544 19.1092C16.5992 18.4699 16.5992 17.5297 16.0544 16.8905C15.821 16.6165 15.6799 16.276 15.6513 15.9172C15.5845 15.08 14.9197 14.4152 14.0824 14.3483C13.7237 14.3197 13.3831 14.1786 13.1092 13.9452ZM14.0117 17.5483C14.3146 17.2657 14.3309 16.7911 14.0483 16.4883C13.7657 16.1855 13.2911 16.1691 12.9883 16.4517L11.3571 17.9741L11.0117 17.6517C10.7089 17.3691 10.2343 17.3855 9.95171 17.6883C9.66909 17.9911 9.68545 18.4657 9.98826 18.7483L10.8454 19.5483C11.1336 19.8172 11.5807 19.8172 11.8689 19.5483L14.0117 17.5483Z" fill="CurrentColor"></path>
</svg>



                </div>
                <strong class="features-title">Skills Development Courses</strong>
                <span class="features-details">Access to comprehensive courses and skill-building resources to enhance your earning potential.</span>
            </div>
            <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                 <svg width="40" height="40" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C10.4003 22 8.88837 21.6244 7.54753 20.9565C7.19121 20.7791 6.78393 20.72 6.39939 20.8229L4.17335 21.4185C3.20701 21.677 2.32295 20.793 2.58151 19.8267L3.17712 17.6006C3.28001 17.2161 3.22094 16.8088 3.04346 16.4525C2.37562 15.1116 2 13.5997 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM7.5 11.1084C7.5 12.4768 8.81884 13.9126 10.0286 14.9417C10.8524 15.6426 11.2644 15.9931 12 15.9931C12.7356 15.9931 13.1476 15.6426 13.9714 14.9417C15.1812 13.9126 16.5 12.4768 16.5 11.1084C16.5 8.43124 14.0249 7.43172 12 9.4998C9.97507 7.43172 7.5 8.43124 7.5 11.1084Z" fill="CurrentColor"></path>
</svg>




                </div>
                <strong class="features-title">Social Media Monetization</strong>
                <span class="features-details">Transform your social media engagement into tangible earnings with our integrated tools.</span>
            </div>
            
        </div>

       
        <span class="hero-title">Explore more features</span>
       
        <div class="grid m-top-20 w-full g-10 pc-grid-2 place-center">
          
            <img src="{{ asset('banners/1b8d59df-399f-49dd-ace7-c72df3e82789.jpeg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
           <img src="{{ asset('banners/6f731e44-c3f1-403f-82e5-6bcf46a8efdd.jpeg') }}" alt="" data-class="trans-from-left" class="w-full observe max-w-500 br-10">
            <img src="{{ asset('banners/70262ef4-e1a2-4636-a1c4-46ab82ec3eaf.jpeg') }}" alt="" data-class="trans-from-bottom" class="w-full observe max-w-500 br-10">
           <img src="{{ asset('banners/85994d5d-548b-4b23-9f9d-552dcc01295e.jpeg') }}" alt="" data-class="trans-from-top" class="w-full observe max-w-500 br-10">
            <img src="{{ asset('banners/c19c30cf-e2d3-430b-9852-ca56c6b975af.jpeg') }}" alt="" data-class="trans-from-left" class="w-full observe max-w-500 br-10">
            <img src="{{ asset('banners/3830fb10-1d04-42be-9d3c-5fa9962d0697.jpeg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
         
            
        </div>
        <div class="column m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">Officially Verified & Certified</strong>
            <span>As a CAC-certified organization, we adhere to strict regulatory standards, giving you the assurance that everything we do is transparent, trustworthy, and legally sound.</span>
        <img src="{{ asset('banners/f372d32a-1995-47ba-8115-e9d9c1442e24.jpeg') }}" alt="" data-class="trans-from-bottom" class="w-full m-x-auto observe max-w-500 br-10">
          
        </div>
         <div class="column m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">Frequently Asked Questions</strong>
            <span style="color:silver;">Find quick and clear answers to the most common questions about {{ config('app.name') }}</span>
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How Do I Join {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
                  <span>  To get started on {{ config('app.name') }},</span>
                  <span>- Click on the `Get Started` button at the top of the page or follow this <a href="{{ url('register') }}" class="no-u bold" style="color:greenyellow">Link</a></span>
                  <span>- Fill the form with your enrollment details</span>
                  <span>- Message any of our verified vendors to purchase your coupon code/access key</span>
                 <span>- We value your privacy so your data are end-to-end encrypted and 100% safe on {{ config('app.name') }}</span>
                </div>
            </div>
            {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">Are Non-Affiliates paid on {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
                 Yes, Non-Affiliate users on {{ config('app.name') }} are paid for their daily activities completed on the platform,subjust to the platform's payment terms and thresholds.
                </div>
            </div>
             {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How do i earn on {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
               You can earn money on {{ config('app.name') }} by completing a variety of activities like tasks, stream, article writing, content monetization etc <br>
               You can also earn money by sharing your affiliate link to your friends and families and earn on each complete signup.
                </div>
            </div>
              {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How long is my withdrawal on {{ config('app.name') }} processed</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
              Withdrawals on {{ config('app.name') }} are typically processed within 1-24 hours depending on the load of withdrawals availble to process.
                </div>
            </div>
        </div>
         <img src="{{ asset('banners/72a5e007-4da6-46d2-853d-eafccff05b9f.jpeg') }}" alt="" class="w-full m-x-auto br-10 max-w-500">
        
    </section>
@endsection
@section('js')
    <script class="js">
        function ObserveItems(class_name){
            let observer=new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    if(entry.isIntersecting){
                        entry.target.classList.add(entry.target.dataset.class);
                    }else{
                        entry.target.classList.remove(entry.target.dataset.class);
                    }
                });
            },{
                threshold : 0
            });
            let items=document.querySelectorAll('.' + class_name);
           items.forEach((item)=>{
             observer.observe(item);
           })
        }
        window.onload=function(){
            document.querySelector('.happy-users').style.minWidth=document.querySelector('.happy-users').getBoundingClientRect().height + 'px'
        }
        ObserveItems('observe');
    </script>
@endsection
