<nav class="nav" id="nav">
    <div class="nav-inner">

        <a href="{{ route('home') }}" class="nav-logo">Portfolio</a>

        <ul class="nav-links" id="navLinks">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('skills') }}">Skills</a></li>
            <li><a href="{{ route('projects') }}">Projects</a></li>
            <li><a href="{{ route('experience') }}">Experience</a></li>
            <li><a href="{{ route('education') }}">Education</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('contact') }}" class="nav-cta">Contact</a></li>
        </ul>

        <button class="nav-toggle" id="navToggle">☰</button>

    </div>
</nav>
