<?php $__env->startSection('title', 'Projects'); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="page-header-inner">
            <span class="section-label">// my work</span>
            <h1 class="section-title">Things I've <span class="gradient-text">built</span></h1>
            <p class="section-subtitle">Platforms, utilities, and full-stack applications.</p>
        </div>
    </div>

    <section style="padding-top: 0;">
        <div class="container">
            <div class="projects-grid">

                <?php $__currentLoopData = config('projects.list'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="project-card reveal">
                        <div class="project-thumb">
                            📁
                        </div>
                        <div class="project-body">
                            <div class="project-tags">
                                <?php $__currentLoopData = $project['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="project-tag"><?php echo e($tag); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <h3 class="project-title"><?php echo e($project['title']); ?></h3>
                            <p class="project-desc"><?php echo e($project['summary']); ?></p>
                            <div class="project-links">
                                <a href="<?php echo e(route('projects.show', $slug)); ?>" class="btn btn-outline btn-sm">Details →</a>
                                <?php if($project['live_link'] !== '#'): ?>
                                    <a href="<?php echo e($project['live_link']); ?>" target="_blank" class="btn btn-sm" style="color:var(--text-2)">↗ Live</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Herd\portfolio\resources\views/projects/index.blade.php ENDPATH**/ ?>