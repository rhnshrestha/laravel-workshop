<!DOCTYPE html>
<html>
<head>
    <title>About Us - My Website</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
</head>
<body>
         <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about-us') }}">About Us</a>
        <a href="{{ url('/contact-us') }}">Contact</a>
        <a href="{{ url('/service') }}">Service</a>
    </nav>
    <img src="{{ asset('assets/frontend/img/aboutus.jpg') }}" alt="About Us Image" class="main-img">
    <script src="/js/script.js"></script>
</body>
</html>