<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

    <section class="hero">
        <div class="container">
            <div class="hero-content">

                <div class="hero-badge">
                    <span class="hero-badge-dot"></span>
                    No Work, Just A Broke Man That Needed A JOB!!!
                </div>

                <h1 class="hero-title">
                    Hi, I'm <span class="gradient-text">Carl</span><br>
                    Your Average Broke and Jobless Man!
                </h1>

                <p class="hero-subtitle">
                    "PLS PLS PLS PLS, HIRE ME!!! I CAN DO ANYTHING!!!"
                </p>

                <div class="hero-actions">
                    <a href="<?php echo e(route('projects')); ?>" class="btn btn-primary">View My Work →</a>
                    <a href="<?php echo e(route('contact')); ?>" class="btn btn-outline">Get In Touch</a>
                </div>

            </div>
        </div>

        <div class="hero-orbs">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>
        </div>

        <div class="hero-scroll">scroll</div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Herd\portfolio\resources\views/home.blade.php ENDPATH**/ ?>