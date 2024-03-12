<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<nav>
    <ul>
        <li><a href="<?php echo e(route('website.index')); ?>" <?php if($page == 'index'): ?>
            style="opacity: 70%"
        <?php endif; ?>
        >Home</a></li>

        <li><a style="color: #7ed679;font-weight: bolder" href="<?php echo e(route('website.4K')); ?>" 
            <?php if($page == 'fourkMovies'): ?>
                style="opacity: 70%"
            <?php endif; ?>
            >4K</a></li>

        <li><a href="<?php echo e(route('website.trending')); ?>"
            <?php if($page == 'trending'): ?>
                style="opacity: 70%"
            <?php endif; ?>
            >Trending</a></li>

        <li><a href="<?php echo e(route('website.browse')); ?>"
            <?php if($page == 'browse'): ?>
                style="opacity: 70%"
            <?php endif; ?>
            >Browse</a></li>

        <li><a href="<?php echo e(route('website.suggestion')); ?>"
            <?php if($page == 'suggestion'): ?>
                style="opacity: 70%"
            <?php endif; ?>
            >Suggestions</a></li>

        <li><a href="<?php echo e(route('website.bookmarks')); ?>"
            <?php if($page == 'bookmarks'): ?>
                style="opacity: 70%"
            <?php endif; ?>
            >Bookmarks</a></li>

        <li><a href="<?php echo e(route('website.register')); ?>"
            <?php if($page == 'register'): ?>
                style="opacity: 70%"
            <?php endif; ?>
            >Register</a></li>
    </ul>
</nav>



<?php echo $__env->yieldContent('content'); ?>



<footer>
    <div class="footer-left">&#9886;MoviesLand&#9887;</div>
    <div class="footer-center">MoviesLand Created By: &#x2133;ohamed Ennara</div>
    <div class="footer-right">
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
        <a href="#">YouTube</a>
    </div>
</footer>

</body>
</html>
<?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/website/layout.blade.php ENDPATH**/ ?>