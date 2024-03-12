



<?php $__env->startSection('title'); ?>
    MoviesLand | Suggestions Movies
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href=" <?php echo e(asset('css/style.css')); ?> ">

<main>

    <h1 class="trending-movies-title">Our Suggestions 4U &#9825;</h1>
    <div class="movie-container">
        <!-- Sample Movie Card -->

<?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="movie-card">
    <div class="hover-info">
        <div class="rating" style="color: gold;font-weight:bolder">&#9733;</div>
        <div class="rating">8.5</div>
        <div class="category"><?php echo e($movie->category); ?></div>
        <button class="btn btn-danger"><a class="movie-details-link" href="<?php echo e(route('website.movieDetails', $movie->id)); ?>">View Details</a></button>
    </div>
    <img src="/images/<?php echo e($movie->image); ?>" alt="Movie Poster" >
    <div class="movie-details">
        <div class="movie-title"> <?php echo e($movie->name); ?> </div>
        <div class="movie-year"><?php echo e($movie->year); ?></div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 

    </div>

</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/website/suggest.blade.php ENDPATH**/ ?>