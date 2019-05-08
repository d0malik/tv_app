<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex-center position-ref full-height">
        <div class="title">
            <h1>Edit Quote</h1>
        </div>
        <div class="content">
            <div class="card text-center" style="width: 50%;">
                <div class="card-body">
                    <h2 class="card-title">Season <?php echo e($quote->season); ?> - Episode <?php echo e($quote->episode); ?></h2>
                    <h5 class="card-text"><?php echo e($quote->quote); ?></h5>
                </div>
                <div class="card-footer text-muted">
                    Submitted on <?php echo e($quote->created_at); ?>

                </div>
                <a href="/edit/delete_quote/<?php echo e($quote->id); ?>" class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/domalik/tv_app/resources/views/quotes/editquote.blade.php ENDPATH**/ ?>