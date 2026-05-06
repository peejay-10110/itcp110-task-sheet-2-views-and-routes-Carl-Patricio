<?php $__env->startSection('title', $project['title']); ?>

<?php $__env->startSection('content'); ?>

    <div class="project-show-hero">
        <div class="container">
            <a href="<?php echo e(route('projects')); ?>" class="back-link">← Back to Projects</a>
            <div class="project-tags" style="margin-bottom:20px;">
                <?php $__currentLoopData = $project['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="project-tag"><?php echo e($tag); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <h1 class="project-show-title"><?php echo e($project['title']); ?></h1>
            <p class="section-subtitle"><?php echo e($project['summary']); ?></p>
        </div>
    </div>

    <div class="project-show-body">
        <div class="container">
            <div class="project-show-content reveal">

                <div class="project-meta-grid">
                    <div class="project-meta-item">
                        <label>Role</label>
                        <p><?php echo e($project['role']); ?></p>
                    </div>
                    <div class="project-meta-item">
                        <label>Tech Stack</label>
                        <p><?php echo e($project['tech_stack']); ?></p>
                    </div>
                    <div class="project-meta-item">
                        <label>Year</label>
                        <p><?php echo e($project['year']); ?></p>
                    </div>
                </div>

                <?php echo $project['description']; ?>


                <div style="display:flex; gap:16px; margin-top:44px; flex-wrap:wrap;">
                    <?php if($project['live_link'] !== '#'): ?>
                        <a href="<?php echo e($project['live_link']); ?>" class="btn btn-primary" target="_blank">↗ View Live</a>
                    <?php endif; ?>

                    <?php if($project['github_link'] !== '#'): ?>
                        <a href="<?php echo e($project['github_link']); ?>" class="btn btn-outline" target="_blank">GitHub →</a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Herd\portfolio\resources\views/projects/show.blade.php ENDPATH**/ ?>