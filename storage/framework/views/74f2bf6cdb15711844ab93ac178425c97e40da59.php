<?php $__env->startSection('content'); ?>
    <div id="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <h1>Add a Member Here</h1>
                <?php echo Form::open(array('action'=>'MembersController@store', 'files'=>true)); ?>


                <div class="form-group">
                    <?php echo Form::label('name', 'Name'); ?>

                    <?php echo Form::text('name', null, array( 'class'=>'form-control')); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('email', 'Email'); ?>

                    <?php echo Form::text('email', null, array( 'class'=>'form-control')); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('phone', 'Phone'); ?>

                    <?php echo Form::text('phone', null, array( 'class'=>'form-control')); ?>

                </div>
                <?php echo Form::label('image', 'Upload avatar'); ?>

                <?php echo Form::file('image', null, array( 'class'=>'form-control')); ?>



                <?php echo Form::submit( 'Add Member', array('class'=>'btn')); ?>

                <?php echo Form::close(); ?>

            </div>
            <div class="col-md-4" >

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>