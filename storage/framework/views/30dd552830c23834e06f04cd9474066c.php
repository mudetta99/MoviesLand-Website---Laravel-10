



<?php $__env->startSection('title'); ?>
    MoviesLand | Bookmark Movies
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href=" <?php echo e(asset('css/style.css')); ?> ">

<main>

    <h1 class="trending-movies-title">0 Bookmarked Movies</h1>

</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/website/bookmarks.blade.php ENDPATH**/ ?>