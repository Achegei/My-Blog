@extends('main')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff3e0;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            background-color: #ff9800;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .container a {
            color: #ffffff;
            text-decoration: underline;
        }
    </style>

        <h1>Privacy Policy</h1>
        <p>Your privacy is important to us. This privacy policy explains how we collect, use, and protect your personal information.</p>

        <p><strong>Information We Collect:</strong></p>
        <p>We may collect personal data such as your name, email address, and phone number when you interact with our services.</p>

        <p><strong>How We Use Information:</strong></p>
        <p>We use your information to provide, improve, and personalize our services, as well as to communicate with you.</p>

        <p><strong>Data Security:</strong></p>
        <p>We take reasonable measures to protect your information from unauthorized access, loss, or misuse.</p>

        <p>If you have any questions, feel free to <a href="mailto:info@spacetaxi.ca">contact us</a>.</p>
    @endsection
