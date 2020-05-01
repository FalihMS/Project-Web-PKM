<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<form>
<?php echo csrf_field(); ?>
    <select name="test" id="test">
        <option value="0">---</option>
        <?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($lecturer['id']); ?>"><?php echo e($lecturer['name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <select name="subtest" id="subtest">
        <option value="0">---</option>
    </select>
</form>

<!-- Scripts -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>


</body>
</html>
<?php /**PATH C:\Users\Falih\PhpstormProjects\pkm\resources\views/test.blade.php ENDPATH**/ ?>