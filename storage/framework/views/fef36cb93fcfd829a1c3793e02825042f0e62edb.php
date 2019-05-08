<?php $__env->startSection('content'); ?>
    <div class="flex-center position-ref full-height">
        <div class="title">
            <h1>Create Quote</h1>
        </div>
        <div class="content">
            <div class="card text-center" style="width: 50%;">
                <div class="card-body">
                    <!-- <h2 class="card-title">Season x - Episode y</h2>
                    <h5 class="card-text">z</h5> -->
                    <?php echo Form::open(['action' => 'QuotesController@store', 'method' => 'POST']); ?>

                        <div class="form-group">
                            <?php echo e(Form::label('season', 'Season')); ?>

                            <?php echo e(Form::number('season', '', ['class' => 'form-control', 'required', 'placeholder' => 'Season'])); ?>

                            <br>
                            <?php echo e(Form::label('episode', 'Episode')); ?>

                            <?php echo e(Form::number('episode', '', ['class' => 'form-control', 'required', 'placeholder' => 'Episode'])); ?>

                            <br>
                            <?php echo e(Form::label('quote', 'Quote')); ?>

                            <?php echo e(Form::text('quote', '', ['class' => 'form-control', 'required', 'placeholder' => 'Quote'])); ?>

                        </div>
                        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-success'])); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/domalik/tv_app/resources/views/quotes/create.blade.php ENDPATH**/ ?>