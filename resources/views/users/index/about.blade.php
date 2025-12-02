@extends('layout.users.index')
@section('title')
    About Us
@endsection
@section('css')
    <style class="css">
         .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
    </style>
@endsection
@section('main')
    <section class="column g-10 w-full p-10">
        <section class="about-profitpay">
   <div>
        <div class="hero-title w-fit">About {{ config('app.name') }}</div>
        <p>Your cycle of wealth and digital empowerment</p>
    </div>
<div class="section">
        <h2>Who We Are</h2>
        <p>
            Monetrax is a digital ecosystem designed to help users earn, learn and grow across multiple online sectors.
            We provide tools, learning resources and income-driven activities that empower individuals globally.
        </p>
    </div>

    <div class="section">
        <h2>Amazing Features</h2>

        <div class="features">

            <div class="feature-box">
                <h3>Worldwide Global Recognition</h3>
                <p>Our platform supports users across different countries with easy access and secure systems.</p>
            </div>

            <div class="feature-box">
                <h3>24/7 Customer Support</h3>
                <p>Reliable support team always available to assist you anytime.</p>
            </div>

            <div class="feature-box">
                <h3>Weekly Salary for Users</h3>
                <p>Earn weekly based on activities completed on the platform.</p>
            </div>

            <div class="feature-box">
                <h3>Courses & Skills</h3>
                <p>Access practical digital skills and learning resources.</p>
            </div>

            <div class="feature-box">
                <h3>Reading Articles</h3>
                <p>Earn rewards by reading educational and trending articles.</p>
            </div>

            <div class="feature-box">
                <h3>Trade Sector</h3>
                <p>Participate in simplified trading tools designed for easy use.</p>
            </div>

            <div class="feature-box">
                <h3>Stream & Earn</h3>
                <p>Watch streams and earn unlimited times with eligible content.</p>
            </div>

            <div class="feature-box">
                <h3>Social Media Monetization</h3>
                <p>Generate income through your online activities and engagement.</p>
            </div>

        </div>
    </div>
   
</section>
    </section>
@endsection