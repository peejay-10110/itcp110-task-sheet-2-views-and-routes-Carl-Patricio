<?php $__env->startSection('title', 'About Me'); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="page-header-inner">
            <span class="section-label">// about me</span>
            <h1 class="section-title">A little about <span class="gradient-text">myself</span></h1>
        </div>
    </div>

    <section style="padding-top: 0;">
        <div class="container">
            <div class="about-grid">

                <div class="about-text">

                    <p class="reveal">Hi, I'm Carl. I'm an BTVTED-ICT student in Taguig who really needs <strong>MONEY</strong>. 💸</p>

                    <p class="reveal reveal-delay-1">I build apps with PHP, Python, and Java. I'm good at it, but let's be real—my ultimate dream is to retire early, cook whatever that came to me, and never look at a bank statement again.</p>

                    <p class="reveal reveal-delay-2">Hire me. My code is clean, my League of Legends trash-talk is top-tier, and I really need to fund my gacha addiction.</p>

                    <div class="about-stats">
                        <div class="stat-card reveal">
                            <div class="stat-number">💯</div>
                            <div class="stat-label">Motivation for Cash</div>
                        </div>
                        <div class="stat-card reveal reveal-delay-1">
                            <div class="stat-number">0</div>
                            <div class="stat-label">Desire to Stress</div>
                        </div>
                        <div class="stat-card reveal reveal-delay-2">
                            <div class="stat-number">∞</div>
                            <div class="stat-label">Gacha Pulls Needed</div>
                        </div>
                    </div>

                </div>

                <div class="about-visual reveal reveal-delay-2">
                    <div class="about-image-frame">
                        <img src="<?php echo e(asset('images/money.png')); ?>" alt="Money" style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit;">
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Herd\portfolio\resources\views/about.blade.php ENDPATH**/ ?>