<?php $__env->startSection('content'); ?>

    <h1>List All Member Here</h1>


    <?php foreach($members as $member): ?>
        <h1><a href="<?php echo e(url('/member', $member->id)); ?>"><?php echo e($member -> name); ?></a></h1>

        <?php /*<h3>  <?php echo e(Form::image($member->image, '',array('height'=>80, 'width'=> 80)   )); ?>*/ ?>

        <h3>  <?php echo Form::image($member->image, '',array('height'=>80, 'width'=> 80)   ); ?>


        </h3>
    <?php endforeach; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>