<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex-center position-ref full-height">
        <div class="title">
            <h1>View Quotes</h1>
        </div>
        <div class="content">
            <?php if(count($quotes) > 0): ?>
                <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card text-center" style="width: 50%;">
                        <div class="card-body">
                            <h2 class="card-title">Season <?php echo e($quote->season); ?> - Episode <?php echo e($quote->episode); ?></h2>
                            <h5 class="card-text"><?php echo e($quote->quote); ?></h5>
                        </div>
                        <div class="card-footer text-muted">
                            Submitted on <?php echo e($quote->created_at); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="card text-center" style="width: 50%;">
                        <div class="card-body">
                            <h2 class="card-title">No Quotes Found!</h2>
                            <h5 class="card-text">:(</h5>
                            <small></small>
                        </div>
                    </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/domalik/tv_app/resources/views/quotes/viewquotes.blade.php ENDPATH**/ ?>