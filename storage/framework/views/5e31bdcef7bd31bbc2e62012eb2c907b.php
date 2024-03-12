

<?php $__env->startSection('title'); ?>
    MoviesLand
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="hero-section">
    <p class="hero-section-head">Download MoviesLand movies: HD smallest size</p>
    <p>Welcome to the official MoviesLand website. Here you can browse and download movies in excellent 720p, 1080p, 2160p 4K and 3D quality, all at the smallest file size. MoviesLand Torrents.</p>
    <p>IMPORTANT - MoviesLand is the only new official domain for movies</p>
</div>

<main>
        <h1 class="new-movies">&#127775;Newest Movies&#127775;</h1>
            <div class="movie-container">
                <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="movie-card">
                        <div class="hover-info">
                            <div class="rating" style="color: gold;font-weight:bolder">&#9733;</div>
                            <div class="rating">8.5</div>
                            <div class="category"><?php echo e($movie->category); ?></div>
                            <button class="btn btn-danger"><a class="movie-details-link" href="<?php echo e(route('website.movieDetails', $movie->id)); ?>">View Details</a></button>
                        </div>
                        
                        <img src="/images/<?php echo e($movie->image); ?>" alt="Movie Poster">
                        <div class="movie-details">
                            <div class="movie-title"> <?php echo e($movie->name); ?> </div>
                            <div class="movie-year"><?php echo e($movie->year); ?></div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        <h1 class="upcoming-movies">&#127775;Upcoming Movies&#127775;</h1>
            <div class="movie-container">
                <?php $__currentLoopData = $upcomingMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="movie-card">
                        <div class="hover-info">
                            <div class="rating" style="color: gold;font-weight:bolder">&#9733;</div>
                            <div class="rating">8.5</div>
                            <div class="category"><?php echo e($movie->category); ?></div>
                            <button class="btn btn-danger"><a class="movie-details-link" href="<?php echo e(route('website.movieDetails', $movie->id)); ?>">View Details</a></button>
                        </div>
                        <img src="/images/<?php echo e($movie->image); ?>" alt="Movie Poster">
                        <div class="movie-details">
                            <div class="movie-title"> <?php echo e($movie->name); ?> </div>
                            <div class="movie-year"><?php echo e($movie->year); ?></div>
                            
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/website/index.blade.php ENDPATH**/ ?>