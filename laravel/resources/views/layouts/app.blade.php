<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Personal Portfolio')">
    <title>@yield('title', 'Portfolio') — Carl</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700;800&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('partials.nav')

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="footer-inner">
        <p class="footer-text">© {{ date('Y') }} — crafted by <span style="color:var(--purple-light)">Carl The Great</span></p>
        <div class="footer-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('blog') }}">Blog</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
    </div>
</footer>

</body>
</html>
