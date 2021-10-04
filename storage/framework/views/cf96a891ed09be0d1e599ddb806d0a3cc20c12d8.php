<?php echo $__env->make('setup.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body id="home">
<?php $appConfig = app('App\Http\Controllers\Controller'); ?>
<?php
    $appVersion = config('gain.app_version');
?>
<div id="app">
    <main id="app">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
<script>
    window.appConfig = {
        appUrl: "<?= $appConfig->appUrl ?>",
        app_name: "<?= $appConfig->app_name ?>",
        publicPath: "<?= $appConfig->publicPath ?>",

        dateTimeFormat: "",
        dateFormat: "",
        knowDefaultRowSettings: "",
        currentUserId: "",

        currencySymbol: "<?php echo e($appConfig->currency_symbol); ?>",
        currencyFormat: "<?php echo e($appConfig->currency_format); ?>",
        thousandSeparator: "<?php echo e($appConfig->thousand_separator); ?>",
        decimalSeparator: "<?php echo e($appConfig->decimal_separator); ?>",
        numberOfDecimal: "<?php echo e($appConfig->number_of_decimal); ?>>",
        appLogo: "<?php echo e($appConfig->app_logo); ?>",
        appName: "<?php echo e($appConfig->app_name); ?> ",
        currencyCode: "<?php echo e($appConfig->currency_code); ?>",
        timeFormat: "<?php echo e($appConfig->time_format); ?>",
        businessType: "<?php echo e($appConfig->business_type); ?>",
        appVersion: "<?php echo e($appVersion); ?>",
    }
</script>
<?php echo $__env->make('setup.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/javier/Sites/upload/resources/views/setup/layouts/install.blade.php ENDPATH**/ ?>