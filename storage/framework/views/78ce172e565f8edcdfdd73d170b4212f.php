



<?php $__env->startSection('title'); ?>
    MoviesLand | Login
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href=" <?php echo e(asset('css/style.css')); ?> ">

<main>

    <h3 class="trending-movies-title"></h3>

    <form action="#" method="POST">
        <?php echo csrf_field(); ?>
        <h2>Login</h2>
        <br>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit">Login</button>
        <h5>Don't Have Account? <a style="text-decoration: none" href="<?php echo e(route('website.register')); ?>">Register</a> </h5>
    </form>
    
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MuworkSpace\PHP\Laravel\MoviesLand\resources\views/website/login.blade.php ENDPATH**/ ?>