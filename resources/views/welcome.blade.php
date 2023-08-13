@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <main class="main-container home-section">
        <section id="home">
            <div class="landing-page-details">
                <h1 class="small-title">Hi,</h1>
                <h2 class="big-title">I'm <span class="my-name pink">Annie</span></h2>
                <h3 class="medium-title"><em>Quality Assurance Engineer @ <a class="pink"
                            href="https://get.popmenu.com/">Popmenu</a></em></h3>
                <!-- <div class="short-bio">
                        <p>I am a photographer, self-taught developer, and
                            mother of a bear
                            puppy named Coconut
                            based in Los Angeles, California.</p>
                    </div> -->
                <!-- <div class="cta-container email-container">
                        <a href="mailto:anniewu2303@gmail.com" class="cta email-button">
                            <img src="{{ asset('img/email.svg') }}" alt="Email Icon">
                            <span>Say Hello</span>
                        </a>
                    </div> -->
            </div>
            <div class="art-me">
                <img src="{{ asset('img/me-icon.gif') }}" alt="Icon of me and Coconut. Art credits to @wynn.draws">
            </div>
            <div class="landing-page-socials">
                <ul>
                    <li class="social-link">
                        <a href="https://www.linkedin.com/in/anniewu2303/" aria-label="LinkedIn" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="social-link">
                        <a href="https://github.com/anniedotexe" aria-label="GitHub" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                    <li class="social-link">
                        <a href="https://instagram.com/anniedotexe" aria-label="Instagram" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="projects" id="select-projects">
            <h2>Select Projects</h2>
            <p class="section-description">
                Here are some personal projects I have worked on.<br>
                You can find more on <a class="hyperlink" href="https://github.com/anniedotexe">GitHub</a>.
            </p>
            <div class="project-cards-container">
                <div class="card">
                    <img src="{{ asset('img/project-preview/nunflix-preview.png') }}" alt="Project Preview Screenshot"
                        class="card-preview-img">
                    <div class="card-info">
                        <div class="title-and-links">
                            <span class="project-title">
                                Nunflix
                            </span>
                            <div class="project-links">
                                <a href="https://nunflix-6e5b3.web.app/">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="https://github.com/anniedotexe/nunflix">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-skills">
                            <span>React JS</span>
                            <span>Firebase Hosting</span>
                        </div>
                        <p class="project-description">
                            This is a frontend clone of Netflix's website made just for their
                            original series <a class="hyperlink" href="https://www.imdb.com/title/tt9059350/">Warrior
                                Nun</a>. It
                            is built with React and uses the TMDB API to pull in data and
                            images. All images are shuffled upon page refresh.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/project-preview/subuwu-preview.png') }}" alt="Project Preview Screenshot"
                        class="card-preview-img">
                    <div class="card-info">
                        <div class="title-and-links">
                            <span class="project-title">
                                Subuwu
                            </span>
                            <div class="project-links">
                                <a href="https://subuwu.anniew.xyz/">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="https://github.com/anniedotexe/subuwu">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-skills">
                            <span>ReactJS</span>
                            <span>Redux</span>
                            <span>Styled-Components</span>
                        </div>
                        <p class="project-description">
                            This is a responsive Tesla website clone customized for Subuwu
                            &#40;Subaru but its uwu&#41;.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/project-preview/ig-bot-preview.png') }}" alt="Project Preview Screenshot"
                        class="card-preview-img">
                    <div class="card-info">
                        <div class="title-and-links">
                            <span class="project-title">
                                Instagram Like & Comment Bot
                            </span>
                            <div class="project-links">
                                <a href="https://www.instagram.com/anniedotexe/">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="https://github.com/anniedotexe/Instagram-Like-Comment-Bot">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-skills">
                            <span>Python</span>
                            <span>Selenium</span>
                        </div>
                        <p class="project-description">
                            An Instagram bot script written in Python using <a class="hyperlink"
                                href="https://selenium-python.readthedocs.io/">Selenium</a> on
                            Google Chrome. It will go through posts in hashtag(s) and like
                            and/or comment on them.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/project-preview/twitcord-preview.png') }}" alt="Project Preview Screenshot"
                        class="card-preview-img">
                    <div class="card-info">
                        <div class="title-and-links">
                            <span class="project-title">
                                Twitcord
                            </span>
                            <div class="project-links">
                                <a href="https://twitcord.anniew.xyz/">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="https://github.com/anniedotexe/twitcord">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-skills">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                        </div>
                        <p class="project-description">
                            A mobile UI concept of "If Twitter was owned by Discord." It was
                            inspired by this <a
                                href="https://www.reddit.com/r/discordapp/comments/lxjoe1/if_twitter_were_owned_by_discord/"
                                class="hyperlink">concept art</a> on Reddit. You can
                            change the nav tabs and toggle on the reaction buttons.
                        </p>
                    </div>
                </div>
        </section>
        <div class="cta-container">
            <a href="/projects" class="cta">
                <img src="{{ asset('img/coding.svg') }}" alt="Code Icon">
                <span>Explore More</span>
            </a>
        </div>
    </main>
@endsection
