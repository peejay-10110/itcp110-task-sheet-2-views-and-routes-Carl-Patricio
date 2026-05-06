@extends('layouts.app')

@section('title', $project['title'])

@section('content')

    <div class="project-show-hero">
        <div class="container">
            <a href="{{ route('projects') }}" class="back-link">← Back to Projects</a>
            <div class="project-tags" style="margin-bottom:20px;">
                @foreach($project['tags'] as $tag)
                    <span class="project-tag">{{ $tag }}</span>
                @endforeach
            </div>
            <h1 class="project-show-title">{{ $project['title'] }}</h1>
            <p class="section-subtitle">{{ $project['summary'] }}</p>
        </div>
    </div>

    <div class="project-show-body">
        <div class="container">
            <div class="project-show-content reveal">

                <div class="project-meta-grid">
                    <div class="project-meta-item">
                        <label>Role</label>
                        <p>{{ $project['role'] }}</p>
                    </div>
                    <div class="project-meta-item">
                        <label>Tech Stack</label>
                        <p>{{ $project['tech_stack'] }}</p>
                    </div>
                    <div class="project-meta-item">
                        <label>Year</label>
                        <p>{{ $project['year'] }}</p>
                    </div>
                </div>

                {!! $project['description'] !!}

                <div style="display:flex; gap:16px; margin-top:44px; flex-wrap:wrap;">
                    @if($project['live_link'] !== '#')
                        <a href="{{ $project['live_link'] }}" class="btn btn-primary" target="_blank">↗ View Live</a>
                    @endif

                    @if($project['github_link'] !== '#')
                        <a href="{{ $project['github_link'] }}" class="btn btn-outline" target="_blank">GitHub →</a>
                    @endif
                </div>

            </div>
        </div>
    </div>

@endsection
