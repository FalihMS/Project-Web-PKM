<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lecturer Information</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                            <form>
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="code" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Lecturer Code')); ?></label>

                                    <div class="col-md-6">
                                        <input id="code" type="text" class="form-control <?php if ($errors->has('code')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('code'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="code" value="<?php echo e($lecturer['code']); ?>" required autocomplete="code" autofocus>

                                        <?php if ($errors->has('code')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('code'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Lecturer Name')); ?></label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e($lecturer['name']); ?>" required autocomplete="name" autofocus>

                                        <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
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
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">Lecturer List</div>

                    <div class="card-body">
                        <table class="w-100 table" >
                            <tr>
                                <th>No.</th>
                                <th>class</th>
                                <th>Action</th>
                            </tr>
                            <?php if(sizeof($classes) == 0): ?>
                                <tr>
                                    <td colspan="3"> There is no data</td>
                                </tr>
                            <?php else: ?>
                                <?php $i = 1?>
                                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($class['class']); ?></td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </table>
                        <a href="<?php echo e(route('add_class',['id'=> $lecturer['id']])); ?>" class="btn btn-outline-primary">Add new</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Falih\PhpstormProjects\pkm\resources\views/admin/detail_lecturer.blade.php ENDPATH**/ ?>