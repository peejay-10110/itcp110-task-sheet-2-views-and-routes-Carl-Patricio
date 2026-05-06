@extends('layouts.app')

@section('title', 'Skills')

@section('content')

    <div class="page-header">
        <div class="page-header-inner">
            <span class="section-label">// skills & expertise</span>
            <h1 class="section-title">What I <span class="gradient-text">work with</span></h1>
            <p class="section-subtitle">A mix of frontend design, backend logic, mobile development, and practical life skills.</p>
        </div>
    </div>

    <section style="padding-top: 0;">
        <div class="container">
            <div class="skills-grid">


                <div class="skill-category-card reveal">
                    <div class="skill-category-icon">⚡</div>
                    <h3 class="skill-category-title">Frontend</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">HTML5</span>
                        <span class="skill-tag">CSS3</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">Bootstrap</span>
                    </div>
                </div>


                <div class="skill-category-card reveal reveal-delay-1">
                    <div class="skill-category-icon">🔧</div>
                    <h3 class="skill-category-title">Backend</h3>
                    <div class="skill-tags">
                        <span class="skill-tag cyan">PHP</span>
                        <span class="skill-tag cyan">Laravel</span>
                        <span class="skill-tag cyan">Java</span>
                        <span class="skill-tag cyan">Python</span>
                        <span class="skill-tag cyan">MySQL</span>
                    </div>
                </div>

                <div class="skill-category-card reveal reveal-delay-2">
                    <div class="skill-category-icon">🛠</div>
                    <h3 class="skill-category-title">Tools & Mobile</h3>
                    <div class="skill-tags">
                        <span class="skill-tag pink">Mobile App Development</span>
                        <span class="skill-tag pink">Git</span>
                        <span class="skill-tag pink">PhpStorm</span>
                        <span class="skill-tag pink">Docker</span>
                    </div>
                </div>

                {{-- ─ PERSONAL SKILLS ─ --}}
                <div class="skill-category-card reveal reveal-delay-3">
                    <div class="skill-category-icon">🧠</div>
                    <h3 class="skill-category-title">Personal Skills</h3>
                    <div class="skill-tags">
                        <span class="skill-tag pink">Highly Adaptive</span>
                        <span class="skill-tag pink">Creative Problem Solving</span>
                        <span class="skill-tag pink">Culinary Arts (Garlic Confit)</span>
                        <span class="skill-tag pink">Fast Learner</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
