<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lecturer Information</div>

                    <div class="card-body">
                        <form action="<?php echo e(route('save_class')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="class" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Class')); ?></label>

                                <div class="col-md-6">
                                    <input id="class" type="text" class="form-control <?php if ($errors->has('class')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('class'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="class" value="<?php echo e(old('class')); ?>" required autocomplete="class" autofocus>

                                    <?php if ($errors->has('class')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('class'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="id_lecturer" type="text" class="form-control <?php if ($errors->has('id_lecturer')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id_lecturer'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="id_lecturer" value="<?php echo e($id); ?>" required autocomplete="id_lecturer" autofocus hidden>

                                    <?php if ($errors->has('id_lecturer')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id_lecturer'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Save')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Falih\PhpstormProjects\pkm\resources\views/admin/add_class.blade.php ENDPATH**/ ?>