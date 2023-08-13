@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <main class="main-container home-section">
        <main class="main-container project-section">
            <section class="projects">
                <div class="page-title">
                    <img src="./img/coding.svg" alt="Code Icon">
                    <h2>annie.<span class="pink">projects</span></h2>
                </div>
                <p class="section-description">
                    See <a class="hyperlink"
                        href="https://github.com/anniedotexe">GitHub</a> profile for more details.
                </p>
                <div class="project-cards-container">
                    <div class="card">
                        <img src="./img/project-preview/nunflix-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
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
                                original series <a class="hyperlink"
                                    href="https://www.imdb.com/title/tt9059350/">Warrior Nun</a>. It
                                is built with React and uses the TMDB API to pull in data and
                                images. All images are shuffled upon page refresh.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/project-preview/music-player-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
                        <div class="card-info">
                            <div class="title-and-links">
                                <span class="project-title">
                                    Simple Music Player
                                </span>
                                <div class="project-links">
                                    <a href="https://musicplayer.anniew.xyz/">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="https://github.com/anniedotexe/music-player">
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
                                This is a minimal and simple music player UI design. Users
                                can click on buttons for changing color when they are active, such
                                as liking the song, repeat, and
                                shuffle. Click the play button to play the song in your browser
                                <em>(volume
                                    warning)</em>.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="./img/project-preview/ig-bot-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
                        <div class="card-info">
                            <div class="title-and-links">
                                <span class="project-title">
                                    Instagram Like & Comment Bot
                                </span>
                                <div class="project-links">
                                    <a href="https://www.instagram.com/anniedotexe/">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a
                                        href="https://github.com/anniedotexe/Instagram-Like-Comment-Bot">
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
                        <img src="./img/project-preview/twitcord-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
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
                    <div class="card">
                        <img src="./img/project-preview/tic-tac-toe-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
                        <div class="card-info">
                            <div class="title-and-links">
                                <span class="project-title">
                                    Simple TIC-TAC-TOE Game
                                </span>
                                <div class="project-links">
                                    <a href="https://tic-tac-toe.anniew.xyz/">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="https://github.com/anniedotexe/tic-tac-toe">
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
                                This is a fully responsive simple tic-tac-toe game written in
                                vanilla HTML, CSS, and JavaScript.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="./img/project-preview/subuwu-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
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
                                        <i class="fa-brands fa-github"></i>
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
                        <img src="./img/project-preview/anniewxyz-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
                        <div class="card-info">
                            <div class="title-and-links">
                                <span class="project-title">
                                    anniew.xyz
                                </span>
                                <div class="project-links">
                                    <a href="https://anniew.xyz//">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="https://github.com/anniedotexe/anniew.xyz">
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
                                It's this site you are currently visiting! This is my personal
                                website, a developer and photographer portfolio.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/project-preview/comfy-coffee-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
                        <div class="card-info">
                            <div class="title-and-links">
                                <span class="project-title">
                                    Comfy Coffee
                                </span>
                                <div class="project-links">
                                    <a href="https://comfy-coffee.anniew.xyz/">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="https://github.com/anniedotexe/comfy-coffee">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-skills">
                                <span>HTML5</span>
                                <span>CSS3</span>
                            </div>
                            <p class="project-description">
                                This is the landing page for a fictitious coffee shop called "Comfy
                                Coffee" based on Starbucks'
                                website design.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/project-preview/rnn-twitter-bot-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
                        <div class="card-info">
                            <div class="title-and-links">
                                <span class="project-title">
                                    RNN Twitter Bot
                                </span>
                                <div class="project-links">
                                    <a href="https://twitter.com/dickinson_rnn">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="https://github.com/anniedotexe/RNN-Twitter-Bot">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-skills">
                                <span>Python</span>
                                <span>GCP VM</span>
                            </div>
                            <p class="project-description">
                                This is a recurrent neural network Twitter bot written in Python
                                with Tweepy. It will tweet newly generated text from the trained
                                model every hour to a Twitter account<br><br>
                                My version of this Twitter bot was trained to generate text with
                                Emily Dickinson
                                poems. It was originally deployed on a Google
                                Cloud Platform virtual machine
                                instance. However, the free
                                trial period ended, so it is now scheduled to run locally on PC
                                startup.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/project-preview/twitter-bot-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
                        <div class="card-info">
                            <div class="title-and-links">
                                <span class="project-title">
                                    Twitter Like & Retweet Bot
                                </span>
                                <div class="project-links">
                                    <a href="https://twitter.com/ac_celeste_bot">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="https://github.com/anniedotexe/Twitter-Retweet-Bot">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-skills">
                                <span>Python</span>
                                <span>AWS EC2</span>
                            </div>
                            <p class="project-description">
                                A Twitter bot written in Python using <a class="hyperlink"
                                    href="https://docs.tweepy.org/en/stable/getting_started.html">Tweepy</a>.
                                It will like and/or retweet tweets that contain single or multiple
                                keywords and hashtags.<br><br>
                                My version of this Twitter bot likes and retweets anything
                                containing the words "Animal Crossing Celeste". It was originally
                                deployed on an
                                Amazon Web Services EC2 instance. However, the free trial period
                                ended, so it is now hosted for free on <a class="hyperlink"
                                    href="https://www.pythonanywhere.com/">PythonAnywhere</a>.
                            </p>
                        </div>
                    </div>

                    <!-- <div class="card">
                        <img src="./img/project-preview/optometrist-preview.png"
                            alt="Project Preview Screenshot" class="card-preview-img">
                        <div class="card-info">
                            <div class="title-and-links">
                                <span class="project-title">
                                    An Optometry Practice Website's Redesign
                                </span>
                                <div class="project-links">
                                    <a href="https://optometrist.anniew.xyz/">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a
                                        href="https://github.com/anniedotexe/optometrist-website-redesign">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-skills">
                                <span>HTML5</span>
                                <span>CSS3</span>
                            </div>
                            <p class="project-description">
                                This is a redesign of my optometrist's website to be responsive and
                                have a modern minimalist
                                design (and look less early 2000's).<br><br>
                                <em>I am not associated with nor speak for this optometry
                                    practice.</em>
                            </p>
                        </div>
                    </div> -->
                </div>
            </section>
        </main>
@endsection
