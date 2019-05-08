<?php if(count($errors) > 0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger" style="text-align: center;">
            <?php echo e($error); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success" style="text-align: center;">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-error" style="text-align: center;">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?><?php /**PATH /home/domalik/tv_app/resources/views/messages.blade.php ENDPATH**/ ?>