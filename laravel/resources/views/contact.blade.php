@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <div class="page-header">
        <div class="page-header-inner">
            <span class="section-label">// get in touch</span>
            <h1 class="section-title">Let's <span class="gradient-text">work together</span></h1>
        </div>
    </div>

    <section style="padding-top: 0;">
        <div class="container">
            <div class="contact-grid">

                <div class="contact-info reveal">
                    <h3>Say Hello 👋</h3>
                    <p>PLS HIRE ME I CAN DO ANYTHING FOR THE RIGHT PRICE!!!</p>

                    <div class="contact-links">

                        <div class="contact-link" style="cursor:default;">
                            <div class="contact-link-icon">✉</div>
                            <div>
                                <div class="contact-link-label">// email</div>
                                <div class="contact-link-value">patriciocarl235@gmail.com</div>
                            </div>
                        </div>

                        <div class="contact-link" style="cursor:default;">
                            <div class="contact-link-icon">GH</div>
                            <div>
                                <div class="contact-link-label">// github</div>
                                <div class="contact-link-value">github.com/Carl-Patricio</div>
                            </div>
                        </div>

                        <div class="contact-link" style="cursor:default;">
                            <div class="contact-link-icon">in</div>
                            <div>
                                <div class="contact-link-label">// linkedin</div>
                                <div class="contact-link-value">linkedin.com/in/carl-patricio</div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="contact-form-card reveal reveal-delay-1">

                    @if(session('success'))
                        <div style="background:rgba(6,182,212,0.1); border:1px solid rgba(6,182,212,0.3); color:var(--cyan-light); padding:16px 20px; border-radius:var(--radius); margin-bottom:24px; font-size:0.92rem;">
                            ✓ {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">// name</label>
                                <input type="text" name="name" class="form-input" placeholder="Your name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">// email</label>
                                <input type="email" name="email" class="form-input" placeholder="your@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">// subject</label>
                            <input type="text" name="subject" class="form-input" placeholder="What's this about?">
                        </div>

                        <div class="form-group">
                            <label class="form-label">// message</label>
                            <textarea name="message" class="form-textarea" placeholder="Tell me about your project or idea..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">
                            Send Message →
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection
