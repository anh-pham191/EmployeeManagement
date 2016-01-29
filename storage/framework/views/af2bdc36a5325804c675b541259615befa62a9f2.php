<?php $__env->startSection('content'); ?>

    <h1>List All Member Here</h1>


    <h1><?php echo e($member -> name); ?></h1>

    <h3>  <?php echo e(Form::image($member->image, '',array('height'=>80, 'width'=> 80)   )); ?>

    </h3>
    <h3> <?php echo $member->phone; ?></h3>
    <h3> <?php echo $member->email; ?></h3>
    <a href="<?php echo e(url('member', $member->id.'/edit')); ?>"> Edit</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>