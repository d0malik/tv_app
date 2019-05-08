<?php $__env->startSection('content'); ?>
    <div class="flex-center position-ref full-height">
        <div class="title">
            <h1>Edit Quote</h1>
            <?php echo Form::open(['action' => ['QuotesController@destroy', $quote->id], 'method' => 'POST']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>

            <br>
        </div>
        <div class="content">
            <div class="card text-center" style="width: 50%;">
                <?php echo Form::open(['action' => ['QuotesController@update', $quote->id], 'method' => 'POST']); ?>

                <div class="card-body">
                        <div class="form-group">
                            <?php echo e(Form::label('season', 'Season')); ?>

                            <?php echo e(Form::number('season', $quote->season, ['class' => 'form-control', 'required', 'placeholder' => 'Season'])); ?>

                            <br>
                            <?php echo e(Form::label('episode', 'Episode')); ?>

                            <?php echo e(Form::number('episode', $quote->episode, ['class' => 'form-control', 'required', 'placeholder' => 'Episode'])); ?>

                            <br>
                            <?php echo e(Form::label('quote', 'Quote')); ?>

                            <?php echo e(Form::text('quote', $quote->quote, ['class' => 'form-control', 'required', 'placeholder' => 'Quote'])); ?>

                        </div>
                </div>
                <div class="card-footer text-muted">
                    <?php echo e(Form::hidden('_method', 'PUT')); ?>

                    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-success'])); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/domalik/tv_app/resources/views/quotes/edit.blade.php ENDPATH**/ ?>