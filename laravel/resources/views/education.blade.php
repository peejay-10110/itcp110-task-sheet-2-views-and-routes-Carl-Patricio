@extends('layouts.app')

@section('title', 'Education')

@section('content')

    <div class="page-header">
        <div class="page-header-inner">
            <span class="section-label">// academic background</span>
            <h1 class="section-title">My <span class="gradient-text">Education</span></h1>
            <p class="section-subtitle">My academic journey from primary school to my current university studies.</p>
        </div>
    </div>

    <section style="padding-top: 0;">
        <div class="container">
            <div class="education-grid">

                {{-- ─ COLLEGE ─ --}}
                <div class="education-card reveal">
                    <div class="education-icon">🎓</div>
                    <h3 class="education-degree">Undergraduate Studies (2nd Year)</h3>
                    <p class="education-school">Technical University of the Philippines - Taguig</p>
                    <p class="education-year">2024 – Present</p>
                    <p class="education-desc">Currently in my second year, expanding my practical and theoretical knowledge in technology and software development.</p>
                </div>

                {{-- ─ SENIOR HIGH SCHOOL ─ --}}
                <div class="education-card reveal reveal-delay-1">
                    <div class="education-icon">🥇</div>
                    <h3 class="education-degree">Senior High School (Grades 11-12)</h3>
                    <p class="education-school">President Diosdado Macapagal High School</p>
                    <p class="education-year">2022 – 2024</p>
                    <p class="education-desc">Completed my upper secondary education. Proudly graduated with Honors.</p>
                </div>

                {{-- ─ JUNIOR HIGH SCHOOL ─ --}}
                <div class="education-card reveal reveal-delay-2">
                    <div class="education-icon">🏫</div>
                    <h3 class="education-degree">Junior High School (Grades 7-10)</h3>
                    <p class="education-school">Palar Integrated School</p>
                    <p class="education-year">2018 – 2022</p>
                    <p class="education-desc">Completed foundational secondary education, building early interests in logic and problem-solving.</p>
                </div>

                {{-- ─ ELEMENTARY ─ --}}
                <div class="education-card reveal reveal-delay-3">
                    <div class="education-icon">🎒</div>
                    <h3 class="education-degree">Elementary Education (Grades 1-6)</h3>
                    <p class="education-school">Palar Integrated School</p>
                    <p class="education-year">2012 – 2018</p>
                    <p class="education-desc">Completed primary education and established my core learning habits.</p>
                </div>

            </div>
        </div>
    </section>

@endsection
