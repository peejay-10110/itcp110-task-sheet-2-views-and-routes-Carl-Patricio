// ── Scroll nav effect
const nav = document.querySelector('.nav');
if (nav) {
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 20);
    });
}

// ── Scroll reveal
const reveals = document.querySelectorAll('.reveal');
if (reveals.length) {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.1 });
    reveals.forEach(el => revealObserver.observe(el));
}

// ── Active nav link
const currentPath = window.location.pathname;
document.querySelectorAll('.nav-links a').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath === '/' && href.endsWith('/'))) {
        link.classList.add('active');
    }
});

// ── Mobile nav toggle
const toggle = document.querySelector('#navToggle');
const navLinks = document.querySelector('#navLinks');
if (toggle && navLinks) {
    toggle.addEventListener('click', () => {
        navLinks.classList.toggle('mobile-open');
        toggle.textContent = navLinks.classList.contains('mobile-open') ? '✕' : '☰';
    });
}
