<?php $__env->startSection('title', trans('lang.install')); ?>

<?php $__env->startSection('content'); ?>
    <app-database-wizard></app-database-wizard>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('setup.layouts.install', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/javier/Sites/upload/resources/views/setup/database.blade.php ENDPATH**/ ?>