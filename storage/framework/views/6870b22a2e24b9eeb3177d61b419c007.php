

<style>
    .movie {
        display: flex;
        gap:25px
    }

    .movie .image {
        margin-top: 25px;
        display: flex
    }

    .badge {
        color: #fff;
    }

    span {
        color: #ff0000;
        font-weight: bolder
    }
</style>

<?php $__env->startSection('title'); ?>
    MoviesLand Dashboard|<?php echo e($movie->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="movie">

    <div class="image">
        
        <img src="/images/<?php echo e($movie->image); ?>">
    </div>

    <div class="info">
        <h1><?php echo e($movie->name); ?></h1>
        <span class="badge bg-danger"
        <?php if($movie->year < 2024): ?>
            hidden
        <?php endif; ?>
        
        >New Release</span>

        <h5><span>Year</span>: <?php echo e($movie->year); ?></h5>
        <h5><span>Category</span>: <?php echo e($movie->category); ?></h5>
        <h5><span>Rate</span>: <?php echo e($movie->rate); ?></h5>
           <hr>
        <span>About Movie:</span>
      
        <h4><?php echo e($movie->details); ?></h4>
        <hr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($user->id == $movie->user_id): ?>
                <h6><span>Added by</span>: <?php echo e($user->name); ?></h6>
            <?php endif; ?>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <h6><span>Added at</span>: <?php echo e($movie->created_at); ?></h6>
        <h6><span>Updated at</span>: <?php echo e($movie->updated_at); ?></h6>

    </div>
</div>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/movies/show.blade.php ENDPATH**/ ?>