@extends('layouts.app')

@section('title', 'Projects')

@section('content')

    <div class="page-header">
        <div class="page-header-inner">
            <span class="section-label">// my work</span>
            <h1 class="section-title">Things I've <span class="gradient-text">built</span></h1>
            <p class="section-subtitle">Platforms, utilities, and full-stack applications.</p>
        </div>
    </div>

    <section style="padding-top: 0;">
        <div class="container">
            <div class="projects-grid">

                @foreach(config('projects.list') as $slug => $project)
                    <div class="project-card reveal">
                        <div class="project-thumb">
                            📁
                        </div>
                        <div class="project-body">
                            <div class="project-tags">
                                @foreach($project['tags'] as $tag)
                                    <span class="project-tag">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <h3 class="project-title">{{ $project['title'] }}</h3>
                            <p class="project-desc">{{ $project['summary'] }}</p>
                            <div class="project-links">
                                <a href="{{ route('projects.show', $slug) }}" class="btn btn-outline btn-sm">Details →</a>
                                @if($project['live_link'] !== '#')
                                    <a href="{{ $project['live_link'] }}" target="_blank" class="btn btn-sm" style="color:var(--text-2)">↗ Live</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
