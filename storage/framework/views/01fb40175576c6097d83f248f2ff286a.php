

<?php $__env->startSection('content'); ?>
    
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

<style>
    body {
        background: url('/images/<?php echo e($movie->image); ?>') no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0; 
    }
</style>


<main>
    <div class="movie-details">
        <img src="/images/<?php echo e($movie->image); ?>" alt="<?php echo e($movie->name); ?>" class="details-movie-image">
        <br>
        <button class="btn-download"><a  href="">Download</a></button>
        <br>
        <button class="btn-watch"><a  href="">Watch Now</a></button>

        <div class="about-movie">
            <h3><span style="color: #000">&#x2600;</span> About The Movie <span style="color: #000">&#x2600;</span></h3>
            <h4><span style="color: #000">&#x275D;</span> <?php echo e($movie->details); ?> <span style="color: #000">&#x275E;</span></h4>
        </div>

        <div class="details">
            <h2> <?php echo e($movie->name); ?> </h2>
            <h3> <?php echo e($movie->year); ?> </h3>
            <h3><?php echo e($movie->category); ?></h3>
            <h3><img src="<?php echo e(asset('images/IMDB_Logo_2016.svg.png')); ?>" width="40px" id="imdb-img"> <span  id="rate-10"><?php echo e($movie->rate); ?></span>/10 <span id="rate-star">&#x272E;</span></h3>
        </div>
    </div>

    <div class="movie-related">
        <p>Similar Movies</p>
        <?php $__currentLoopData = $relatedMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedMovie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
       
        <a href="<?php echo e(route('website.movieDetails', $relatedMovie->id)); ?>">
            <img src="/images/<?php echo e($relatedMovie->image); ?>" alt="<?php echo e($relatedMovie->name); ?>">
            <div class="tooltip"><?php echo e($relatedMovie->name); ?></div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  
    <hr>
    
        <!-- Comment Form -->
        <div class="comment-form">
            <h3>Post Your Comment</h3>
            <form action="<?php echo e(route('website.commentSubmit', $movie->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="movie_id" value="<?php echo e($movie->id); ?>">
                
                <label class="label-input" for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label class="label-input" for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label class="label-text-area" for="comment">Your Comment:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
                
                <button type="submit">Submit</button>
            </form>
        </div>
    <hr>
</main>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/website/movieDetails.blade.php ENDPATH**/ ?>