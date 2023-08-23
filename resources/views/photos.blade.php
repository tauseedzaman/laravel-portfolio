@extends('layouts.app')
@section('title')
    Photos
@endsection
@section('content')
    <main class="main-container home-section">
        <main class="main-container project-section">
            <section class="projects">
                <div class="page-title">
                    <img src="./img/coding.svg" alt="Code Icon">
                    <h2>{{ $user->username }}.<span class="pink">Photos</span></h2>
                </div>
                <p class="section-description">
                    See <a class="hyperlink" href="{{ $user->insta_url }}">instagram</a> profile for more details.
                </p>
                <div class="project-cards-container">
                    @foreach ($photos as $photo)
                        <a href="{{ $photo->url }}">
                            <div class="card">
                                <img src="{{ asset('storage/' . $photo->image) }}" alt="Project Preview Screenshot"
                                    class="card-preview-img">
                                <div class="card-info">
                                    <div class="title-and-links">
                                        <span class="project-title">
                                            {{ $photo->title }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                </div>
                </a>
                @endforeach

                </div>
            </section>
        </main>
    @endsection
