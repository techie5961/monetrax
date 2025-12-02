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
      <section class="terms-conditions">
    <div class="legal-header">
        <span class="hero-title">Terms & Conditions</span>
        <div class="effective-date">Last Updated: December 2nd, 2025</div>
        <div class="legal-notice">By accessing and using ProfitPay services, you acknowledge and agree to be bound by these Terms and Conditions.</div>
    </div>

       <div class="container">

        <p>
            These Terms & Conditions govern your access and use of the {{ config('app.name') }} platform.
            By registering or using any service provided by {{ config('app.name') }}, you agree to comply with these terms.
        </p>

        <h2>1. Acceptance of Terms</h2>
        <p>
            By accessing the {{ config('app.name') }} website or mobile platform, you confirm that you understand and accept these terms.
        </p>

        <h2>2. Eligibility</h2>
        <p>
            Users must provide accurate information during registration. {{ config('app.name') }} reserves the right to reject or suspend
            accounts found to be fraudulent or violating our policies.
        </p>

        <h2>3. User Responsibilities</h2>
        <ul>
            <li>Provide valid information during sign-up.</li>
            <li>Do not misuse the platform for illegal or harmful activities.</li>
            <li>Maintain the confidentiality of your login details.</li>
            <li>Follow all guidelines for earning activities.</li>
        </ul>

        <h2>4. Earnings & Payments</h2>
        <p>
            Earnings on {{ config('app.name') }} are based on approved activities such as reading articles, streaming, training,
            monetization tasks, or other earning models provided. Payments are made based on the platform's payout schedule.
        </p>

        <p>
            {{ config('app.name') }} reserves the right to adjust earnings, bonuses, or activity rewards without prior notice when necessary.
        </p>

        <h2>5. Prohibited Activities</h2>
        <p>Users must not engage in:</p>
        <ul>
            <li>Creating multiple accounts.</li>
            <li>Using bots, automation or fraudulent methods to earn.</li>
            <li>Spamming or posting misleading content.</li>
            <li>Any activity that violates copyright, security or platform integrity.</li>
        </ul>

        <h2>6. Service Availability</h2>
        <p>
            {{ config('app.name') }} may temporarily suspend services for updates, maintenance, or unforeseen issues.
            We are not liable for losses caused by network downtime or technical problems beyond our control.
        </p>

        <h2>7. Learning Resources & Courses</h2>
        <p>
            Courses and skill materials provided on {{ config('app.name') }} are for educational purposes only.
            Unauthorized copying or redistribution is prohibited.
        </p>

        <h2>8. Account Suspension</h2>
        <p>
            We may suspend or terminate accounts found violating our terms, engaging in fraudulent activity,
            or harming the platform or other users.
        </p>

        <h2>9. Limitation of Liability</h2>
        <p>
            {{ config('app.name') }} will not be responsible for financial losses, data loss, or damages resulting from your use
            of the platform. Users participate in all earning activities at their own discretion.
        </p>

        <h2>10. Updates to Terms</h2>
        <p>
            These Terms & Conditions may be updated at any time. Continued use of the platform means you accept
            the new changes.
        </p>

        <h2>11. Contact Us</h2>
        <p>
            If you have any questions or concerns regarding these terms, contact our support team through
            the customer service channels available on the platform.
        </p>

    </div>
</section>
    </section>
@endsection