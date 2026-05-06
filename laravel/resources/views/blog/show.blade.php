@extends('layouts.app')

@section('title', $post['title'])

@section('content')

    <div class="blog-show-header">
        <div class="container">
            <a href="{{ route('blog') }}" class="back-link">← Back to Blog</a>
            <span class="section-label">{{ $post['category'] }}</span>
            <h1 class="section-title" style="font-size:clamp(2rem,5vw,3.2rem); max-width:800px; margin-top:8px;">{{ $post['title'] }}</h1>
            <div style="display:flex; gap:28px; margin-top:20px; color:var(--text-3); font-family:'Fira Code',monospace; font-size:0.82rem; flex-wrap:wrap;">
                <span>Admin</span>
                <span>{{ $post['date'] }}</span>
                <span>{{ $post['read_time'] }} min read</span>
            </div>
        </div>
    </div>

    <article class="blog-show-article">

        {{-- This renders your HTML content from the config file! --}}
        {!! $post['content'] !!}

        <div style="border-top:1px solid var(--border); margin-top:64px; padding-top:40px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
            <a href="{{ route('blog') }}" class="back-link" style="margin-bottom:0;">← All Posts</a>
        </div>

    </article>

@endsection
