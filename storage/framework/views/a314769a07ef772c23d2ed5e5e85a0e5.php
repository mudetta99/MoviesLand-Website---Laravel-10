


<?php $__env->startSection('title'); ?>
    MoviesLand Dashboard|Add New Movie
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <form action="<?php echo e(route('movies.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        
            <div class="mb-3">
                <label for="" class="form-label">Movie Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Movie Name" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
        
            <div class="mb-3">
                <label for="" class="form-label">Movie Year</label>
                <input type="text" class="form-control" name="year" placeholder="Enter Movie Year" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Category</label>
                <input type="text" class="form-control" name="category" placeholder="Enter Movie Category" />
            </div>
        
            <div class="mb-3">
                <label for="" class="form-label">Movie Details</label>
                <textarea class="form-control" name="details" id="" rows="3" placeholder="Enter Movie Details"></textarea>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Rate</label>
                <input type="text" class="form-control" name="rate" placeholder="Enter Movie Rate" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Movie Upcoming</label>
                <input type="text" class="form-control" name="upcoming" placeholder="Enter 1 / 0" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">4K</label>
                <input type="text" class="form-control" name="is_4k" placeholder="Enter 1 / 0" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Trending</label>
                <input type="text" class="form-control" name="trending" placeholder="Enter 1 / 0" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Suggest</label>
                <input type="text" class="form-control" name="suggest" placeholder="Enter 1 / 0" />
            </div>
        
            <div class="mb-3">
                <label for="" class="form-label">Movie Image</label>
                <input type="file" class="form-control" name="image" />
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Added By</label>
                <select class="form-select form-select-lg" name="user_id">
                    <option selected>Select one</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
    
        
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>

        
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/movies/create.blade.php ENDPATH**/ ?>