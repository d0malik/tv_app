<?php $__env->startSection('content'); ?>
    <div class="flex-center position-ref full-height">
        <div class="title">
            <h1>View Quotes</h1>
        </div>
        <div class="content">
            <?php if(count($quotes) > 0): ?>
                <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card text-center" style="width: 50%;">
                        <small>&nbsp;</small>
                        <img class="mx-auto card-img-top" style="width: 15%;" src="https://picsum.photos/id/<?php echo e(rand(1020,1029)); ?>/400/400" alt=" ">
                        <div class="card-body">
                            <h2 class="card-title">Season <?php echo e($quote->season); ?> - Episode <?php echo e($quote->episode); ?></h2>
                            <h5 class="card-text"><?php echo e($quote->quote); ?></h5>
                        </div>
                        <div class="card-footer text-muted">
                            Submitted on <?php echo e($quote->created_at); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <ul class="pagination justify-content-center"><?php echo e($quotes->links()); ?></ul>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/domalik/tv_app/resources/views/view.blade.php ENDPATH**/ ?>