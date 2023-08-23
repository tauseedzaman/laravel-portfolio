<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <meta charset="UTF-8">

    <meta property="og:title" content="Annie Wu" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://anniew.xyz" />
    <meta property="og:description" content="Hi! I'm Annie." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="https://anniew.xyz/img/me-icon-smiling.png" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Annie Wu">
    <meta name="twitter:description" content="Hi! I'm Annie.">
    <meta name="twitter:image" content="https://anniew.xyz/img/me-icon-smiling.png">
    <meta name="twitter:site" content="@anniedotexe">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="Annie Wu">
    <meta name="description" content="Hi! I'm Annie.">
    <meta name="keywords"
        content="Annie Wu, Annie Wu Portfolio, Annie Wu Photography, photographer, developer, java, python, html, css, javascript, web developer, webdev, portfolio, quality assurance, qa engineer, quality assurance engineer">
    <meta name="robots" content="noindex, nofollow" />

    <link rel="canonical" href="https://anniew.xyz" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/projects.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" type="text/css">
</head>
@php
    $user = App\Models\Setting::first();
@endphp

<body>
    <header class="header">
        <a href="/" class="header-logo">{{ '@' . $user->username }}</a>
        <nav class="nav">
            <div class="toggle"><i class="fas fa-bars"></i></div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a href="{{ route('projects') }}">Projects</a></li>
                <li class="nav-item"><a href="{{ route('photos') }}">Photos</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer class="footer-container">
        <div class="footer">
            <div class="footer-column">
                <a href="/" class="footer-logo">{{ '@' . $user->username }}</a>
                <div class="socials">
                    <ul>
                        <li class="social-link">
                            <a href="{{ $user->linkedin_url }}" aria-label="LinkedIn" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="social-link">
                            <a href="{{ $user->github_url }}" aria-label="GitHub" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </li>
                        <li class="social-link">
                            <a href="{{ $user->insta_url }}" aria-label="Instagram" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <span class="copyright"><i class="fa-regular fa-copyright"></i> {{ $user->name }} -
                    {{ now()->format('Y') }}</span>
            </div>
            <div class="footer-column">
                <a href="{{ route('about') }}" class="footer-button">
                    <img src="{{ asset('img/smile.svg') }}" alt="Smile Icon">
                    About
                </a>
                <a href="{{ route('projects') }}" class="footer-button">
                    <img src="{{ asset('img/coding.svg') }}" alt="Code Icon">
                    Projects
                </a>

            </div>
            <div class="footer-column">
                <a href="{{ route('photos') }}" class="footer-button">
                    <img src="{{ asset('img/camera.svg') }}" alt="Camera Icon">
                    Photos
                </a>
                <a href="mailto:{{ $user->email }}" class="footer-button">
                    <img src="{{ asset('img/email.svg') }}" alt="Email Icon">
                    Contact
                </a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
