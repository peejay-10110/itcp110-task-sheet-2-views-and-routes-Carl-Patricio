<?php $__env->startSection('title', 'Blog'); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="page-header-inner">
            <span class="section-label">// thoughts, tech & trivia</span>
            <h1 class="section-title">The <span class="gradient-text">Blog</span></h1>
            <p class="section-subtitle">A collection of interesting tech history, science facts, and developer oddities.</p>
        </div>
    </div>

    <section style="padding-top: 0;">
        <div class="container">
            <div class="blog-grid">

                
                <?php $__currentLoopData = config('blog.posts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('blog.show', $slug)); ?>" class="blog-card reveal">
                        <div class="blog-thumb">
                            
                        </div>
                        <div class="blog-body">
                            <div class="blog-category"><?php echo e($post['category']); ?></div>
                            <h3 class="blog-title"><?php echo e($post['title']); ?></h3>

                            
                            <p class="blog-excerpt"><?php echo e(Str::limit(strip_tags($post['content']), 100)); ?></p>

                            <div class="blog-meta">
                                <span><?php echo e($post['date']); ?></span>
                                <span class="read-more"><?php echo e($post['read_time']); ?> min read →</span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Herd\portfolio\resources\views/blog/index.blade.php ENDPATH**/ ?>