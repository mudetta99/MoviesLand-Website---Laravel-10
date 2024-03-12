



<?php $__env->startSection('title'); ?>
    MoviesLand | Browse Movies
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href=" <?php echo e(asset('css/browsePage.css')); ?> ">

<main>

    <div class="search-container">
        <div class="search-container">
            <input type="text" class="search-bar" placeholder="Search...">
            <button class="search-button">Search</button>
        </div>
    
        <div class="options-container">
            <div class="option">
                <label for="quality">Quality:</label>
                <select id="quality">
                    <option value="hd">HD</option>
                    <option value="full-hd">Full HD</option>
                    <option value="4k">4K</option>
                </select>
            </div>
    
            <div class="option">
                <label for="genre">Genre:</label>
                <select id="genre">
                    <option value="action">Action</option>
                    <option value="drama">Drama</option>
                    <option value="comedy">Comedy</option>
                    <!-- Add more genres as needed -->
                </select>
            </div>
    
            <div class="option">
                <label for="rating">Rating:</label>
                <select id="rating">
                    <option value="5">5+</option>
                    <option value="4">4+</option>
                    <option value="3">3+</option>
                </select>
            </div>
    
            <div class="option">
                <label for="year">Year:</label>
                <select id="year">
                    <!-- Add years dynamically or manually as needed -->
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
    
            <div class="option">
                <label for="language">Language:</label>
                <select id="language">
                    <option value="english">English</option>
                    <option value="spanish">Spanish</option>
                    <!-- Add more languages as needed -->
                </select>
            </div>
    
            <div class="option">
                <label for="orderBy">Order By:</label>
                <select id="orderBy">
                    <option value="latest">Latest</option>
                    <option value="popularity">Popularity</option>
                </select>
            </div>
        </div>
    </div>
    
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
    <img src="/images/<?php echo e($movie->image); ?>" alt="Movie Poster">
    <div class="movie-details">
        <div class="movie-title"> <?php echo e($movie->name); ?> </div>
        <div class="movie-year"><?php echo e($movie->year); ?></div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 

    </div>

    <div class="pagination">
    <a href="#" class="page">1</a>
    <a href="#" class="page">2</a>
    <a href="#" class="page">3</a>
    <a href="#" class="page">4</a>
    <a href="#" class="page">5</a>
    <a href="#" class="page">6</a>
    <a href="#" class="page">7</a>
    <a href="#" class="page">8</a>
    <a href="#" class="page">...</a>
    <a href="#" class="page">Next</a>
    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/website/browse.blade.php ENDPATH**/ ?>