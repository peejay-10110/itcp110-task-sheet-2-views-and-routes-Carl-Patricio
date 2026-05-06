<?php $__env->startSection('title', $post['title']); ?>

<?php $__env->startSection('content'); ?>

    <div class="blog-show-header">
        <div class="container">
            <a href="<?php echo e(route('blog')); ?>" class="back-link">← Back to Blog</a>
            <span class="section-label"><?php echo e($post['category']); ?></span>
            <h1 class="section-title" style="font-size:clamp(2rem,5vw,3.2rem); max-width:800px; margin-top:8px;"><?php echo e($post['title']); ?></h1>
            <div style="display:flex; gap:28px; margin-top:20px; color:var(--text-3); font-family:'Fira Code',monospace; font-size:0.82rem; flex-wrap:wrap;">
                <span>Admin</span>
                <span><?php echo e($post['date']); ?></span>
                <span><?php echo e($post['read_time']); ?> min read</span>
            </div>
        </div>
    </div>

    <article class="blog-show-article">

        
        <?php echo $post['content']; ?>


        <div style="border-top:1px solid var(--border); margin-top:64px; padding-top:40px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
            <a href="<?php echo e(route('blog')); ?>" class="back-link" style="margin-bottom:0;">← All Posts</a>
        </div>

    </article>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Herd\portfolio\resources\views/blog/show.blade.php ENDPATH**/ ?>