


<?php $__env->startSection('title'); ?>
    MoviesLand Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<?php if($message = Session::get('added')): ?>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Movie Added Successfully!</h4>
      <hr />
    <p> <?php echo e($message); ?> </p>
  </div>

<?php elseif($message = Session::get('updated')): ?>

  <div class="alert alert-primary" role="alert">
    <h4 class="alert-heading">Movie Updated Successfully!</h4>
      <hr />
    <p> <?php echo e($message); ?> </p>
  </div>

<?php elseif($message = Session::get('delete')): ?>

  <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Movie Deleted Successfully!</h4>
      <hr />
    <p> <?php echo e($message); ?> </p>
  </div>

<?php endif; ?>

    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Movies
                </caption>

                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Details</th>
                    <th>Category</th>
                    <th>Added By</th>
                    <th>Actions</th>
                </tr>

            </thead>
            <tbody class="table-group-divider">
                <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="table-primary">

                        <td scope="row"> <?php echo e($movie->id); ?> </td>
                        <td> <?php echo e($movie->name); ?> </td>
                        <td> <?php echo e($movie->year); ?> </td>
                        <td> <?php echo e($movie->details); ?> </td>
                        <td> <?php echo e($movie->category); ?> </td>
                        <td> <?php echo e($movie->user ? $movie->user->name : 'not found'); ?>  </td>


                        <td>

                          <a class="btn btn-info" href="<?php echo e(route('movies.edit', $movie->id)); ?>">Edit</a>
                          <a class="btn btn-info" href="<?php echo e(route('movies.show', $movie->id)); ?>">Show</a>


                          <form action="<?php echo e(route('movies.destroy', $movie->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal <?php echo e($movie->id); ?>">
                                    Delete <?php echo e($movie->name); ?>

                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal <?php echo e($movie->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><span class="badge badge-warning">Warning</span>
                                            You'll delete <span class="badge badge-danger"><?php echo e($movie->name); ?></span> Movie</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        <h5>Are you sure about that? You will not be able to recover it again.</h5>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>       
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        
    </div>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/movies/index.blade.php ENDPATH**/ ?>