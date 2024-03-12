



<?php $__env->startSection('title'); ?>
    MoviesLand | Register
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
    <div class="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

    <link rel="stylesheet" href=" <?php echo e(asset('css/style.css')); ?> ">

<main>

    <h3 class="trending-movies-title">Complete the registration form and enjoy with all our features.</h3>

    <form action="<?php echo e(route('website.user_registers')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h2>Register</h2>
        <br>
        <input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter Your Name" required>
        <br>
        <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter Your Email" required>
        <br>
        <input type="password" name="password" value="<?php echo e(old('password')); ?>" placeholder="Enter Your Password" required>
        <br>
        <button type="submit">Register</button>
        <h5>Have Account? <a style="text-decoration: none" href="<?php echo e(route('website.login')); ?>">Log in</a> </h5>
    </form>
    
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/website/register.blade.php ENDPATH**/ ?>