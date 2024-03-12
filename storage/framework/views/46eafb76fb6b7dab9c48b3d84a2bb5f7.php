


<?php $__env->startSection('title'); ?>
    MoviesLand Dashboard|Edit <?php echo e($movie->name); ?> Movie
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <form action="<?php echo e(route('movies.update', $movie->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="" class="form-label">Movie Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo e($movie->name); ?>"/>
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Year</label>
                <input type="text" class="form-control" name="year" value="<?php echo e($movie->year); ?>"/>
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Category</label>
                <input type="text" class="form-control" name="category" value="<?php echo e($movie->category); ?>"/>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Details</label>
                <textarea class="form-control" name="details" id="" rows="3"><?php echo e($movie->details); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Rate</label>
                <input type="text" class="form-control" name="rate" value="<?php echo e($movie->rate); ?>" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Upcoming</label>
                <input type="text" class="form-control" name="upcoming" value="<?php echo e($movie->upcoming); ?>" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">4K</label>
                <input type="text" class="form-control" name="is_4k" value="<?php echo e($movie->is_4k); ?>" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Trending</label>
                <input type="text" class="form-control" name="trending" value="<?php echo e($movie->trending); ?>" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Suggest</label>
                <input type="text" class="form-control" name="suggest" value="<?php echo e($movie->suggest); ?>" />
            </div>
        

            <div class="mb-3">
                <label for="" class="form-label">Movie Image</label>
                <img src="/images/<?php echo e($movie->image); ?>" alt="<?php echo e($movie->name); ?>" width="150px">
                <input type="file" class="form-control" value="<?php echo e($movie->image); ?>"/>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Added By</label>
                <select class="form-select form-select-lg" name="user_id">

                    <option selected>Select one</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
                        <option value="<?php echo e($user->id); ?>" <?php if($user->id = $movie->id): echo 'selected'; endif; ?>><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>

            
            


            
    
            
        </form>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/movies/edit.blade.php ENDPATH**/ ?>