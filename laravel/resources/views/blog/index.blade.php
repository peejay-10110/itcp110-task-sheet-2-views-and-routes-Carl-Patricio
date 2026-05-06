@extends('layouts.app')

@section('title', 'Blog')

@section('content')

    <div class="page-header">
        <div class="page-header-inner">
            <span class="section-label">// thoughts, tech & trivia</span>
            <h1 class="section-title">The <span class="gradient-text">Blog</span></h1>
            <p class="section-subtitle">A collection of interesting tech history, science facts, and developer oddities.</p>
        </div>
    </div>

    <section style="padding-top: 0;">
        <div class="container">
            <div class="blog-grid">

                {{-- This loop automatically creates a card for every post in your config file! --}}
                @foreach(config('blog.posts') as $slug => $post)
                    <a href="{{ route('blog.show', $slug) }}" class="blog-card reveal">
                        <div class="blog-thumb">
                            {{-- Add images later if you want --}}
                        </div>
                        <div class="blog-body">
                            <div class="blog-category">{{ $post['category'] }}</div>
                            <h3 class="blog-title">{{ $post['title'] }}</h3>

                            {{-- Grabs the first 100 characters of your content to use as a preview --}}
                            <p class="blog-excerpt">{{ Str::limit(strip_tags($post['content']), 100) }}</p>

                            <div class="blog-meta">
                                <span>{{ $post['date'] }}</span>
                                <span class="read-more">{{ $post['read_time'] }} min read →</span>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </section>

@endsection
