<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Session</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                            <form action="<?php echo e(url('session')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Session name')); ?></label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

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
                                <div class="form-group row">
                                    <label for="deadline" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Deadline')); ?></label>

                                    <div class="col-md-6">
                                        <input id="deadline" type="date" class="form-control <?php if ($errors->has('deadline')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('deadline'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="deadline" value="<?php echo e(old('deadline')); ?>" required autocomplete="deadline" autofocus>

                                        <?php if ($errors->has('deadline')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('deadline'); ?>
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
                                            <?php echo e(__('Add New')); ?>

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
                                <th>Session</th>
                                <th>Deadline</th>
                                <th>Action</th>
                            </tr>
                            <?php if(sizeof($sessions) == 0): ?>
                                <tr>
                                    <td colspan="3"> There is no data</td>
                                </tr>
                            <?php else: ?>
                                <?php $i = 0?>
                                <?php $__currentLoopData = $sessions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $session): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($session['session']); ?></td>
                                        <td><?php echo e($session['deadline']); ?></td>
                                        <td>
                                            <a class="btn btn-success text-white" href="<?php echo e(route('detail_session',['id' => $session['id']])); ?>">View Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Falih\PhpstormProjects\pkm\resources\views/admin/session.blade.php ENDPATH**/ ?>