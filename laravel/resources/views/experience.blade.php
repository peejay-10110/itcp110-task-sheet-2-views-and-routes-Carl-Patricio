@extends('layouts.app')

@section('title', 'Experience')

@section('content')

    <div class="page-header">
        <div class="page-header-inner">
            <span class="section-label">// work history</span>
            <h1 class="section-title">My <span class="gradient-text">Experience</span></h1>
            <p class="section-subtitle">I have a lot of experience in digital-related things, ranging from full-stack architecture to gacha addiction.</p>
        </div>
    </div>

    <section style="padding-top: 0;">
        <div class="container">
            <div class="timeline">


                <div class="timeline-item reveal">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <div class="timeline-meta">
                            <div>
                                <div class="timeline-role">Full-Stack Developer</div>
                                <div class="timeline-company">Architecture Firm Client Portal</div>
                            </div>
                            <span class="timeline-date">2026</span>
                        </div>
                        <ul class="timeline-list">
                            <li>Designed and developed a primary web presence and secure, authenticated client portal using Laravel and PHP.</li>
                            <li>Engineered secure file-handling infrastructure to support the transfer and viewing of massive blueprint and 3D rendering files.</li>
                            <li>Managed complex relational data and strict data integrity using MySQL.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item reveal reveal-delay-1">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <div class="timeline-meta">
                            <div>
                                <div class="timeline-role">Backend & Mobile Developer</div>
                                <div class="timeline-company">Hotel Booking Application</div>
                            </div>
                            <span class="timeline-date">2026</span>
                        </div>
                        <ul class="timeline-list">
                            <li>Developed a dedicated mobile application to streamline room reservations and modernize the guest experience.</li>
                            <li>Built the core infrastructure using Python and custom RESTful APIs for real-time synchronization.</li>
                            <li>Prevented latency and double-booking issues by directly interfacing with a central MySQL management database.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item reveal reveal-delay-2">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <div class="timeline-meta">
                            <div>
                                <div class="timeline-role">Web Developer</div>
                                <div class="timeline-company">Hotel Management Website</div>
                            </div>
                            <span class="timeline-date">2025</span>
                        </div>
                        <ul class="timeline-list">
                            <li>Constructed a complete web solution serving as both the public marketing site and the primary booking engine.</li>
                            <li>Built smooth, interactive front-end features like date pickers and room galleries using HTML5, CSS3, and JavaScript.</li>
                            <li>Handled secure user inputs and pricing tier logic through a complex MySQL backend.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item reveal reveal-delay-3">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <div class="timeline-meta">
                            <div>
                                <div class="timeline-role">Digital Specialist</div>
                                <div class="timeline-company">Personal Endeavors</div>
                            </div>
                            <span class="timeline-date">Ongoing</span>
                        </div>
                        <ul class="timeline-list">
                            <li><strong>Games:</strong> Maintained a lifelong, dedicated interest in playing and analyzing video games.</li>
                            <li><strong>Communications:</strong> As a former League of Legends player, successfully honed highly valued trash-talking skills.</li>
                            <li><strong>Resource Management:</strong> Developed a profound, unyielding addiction to Gacha mechanics.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
