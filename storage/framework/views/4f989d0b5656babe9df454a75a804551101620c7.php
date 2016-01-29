<?php $__env->startSection('content'); ?>
    <div id="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <h1>Edit <?php echo $member->name; ?> Here</h1>

                <?php /*                <?php echo Form::open(array('action'=>'MembersController@store', 'files'=>true)); ?>*/ ?>

                <?php /*                <?php echo Form::model($article, ['method' => 'PATCH', 'action' =>['ArticlesController@update', $article->id]]); ?>*/ ?>

                <?php echo Form::model($member, ['method' => 'PATCH', 'files'=>true, 'action' =>['MembersController@update', $member->id]]); ?>


                <div class="form-group">
                    <?php echo Form::label('name', 'Name'); ?>

                    <?php echo Form::text('name', $member->name, array( 'class'=>'form-control')); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('email', 'Email'); ?>

                    <?php echo Form::text('email', $member->email, array( 'class'=>'form-control')); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('phone', 'Phone'); ?>

                    <?php echo Form::text('phone', $member->phone, array( 'class'=>'form-control')); ?>

                </div>
                <?php echo Form::label('image', 'Upload avatar'); ?>

                <?php echo Form::file('image', null, array( 'class'=>'form-control')); ?>



                <?php echo Form::submit( 'Edit Member', array('class'=>'btn')); ?>

                <?php echo Form::close(); ?>



                <?php echo Form::open(['method' => 'DELETE','route' =>['member.destroy',$member->id]]); ?>

                <div class ="form-group">
                    <?php echo Form::submit('Delete Member', ['class'=>'btn btn-danger']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>