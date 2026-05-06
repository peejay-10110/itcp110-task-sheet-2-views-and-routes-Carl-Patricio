<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Personal Portfolio'); ?>">
    <title><?php echo $__env->yieldContent('title', 'Portfolio'); ?> — Carl</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700;800&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>

<?php echo $__env->make('partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<footer class="footer">
    <div class="footer-inner">
        <p class="footer-text">© <?php echo e(date('Y')); ?> — crafted by <span style="color:var(--purple-light)">Carl The Great</span></p>
        <div class="footer-links">
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="<?php echo e(route('projects')); ?>">Projects</a>
            <a href="<?php echo e(route('blog')); ?>">Blog</a>
            <a href="<?php echo e(route('contact')); ?>">Contact</a>
        </div>
    </div>
</footer>

</body>
</html>
<?php /**PATH C:\Users\user\Herd\portfolio\resources\views/layouts/app.blade.php ENDPATH**/ ?>