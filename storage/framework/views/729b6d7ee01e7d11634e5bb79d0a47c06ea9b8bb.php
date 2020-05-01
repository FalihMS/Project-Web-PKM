<?php $__env->startSection('title', 'Admin Session'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Session</div>

                    <div class="card-body">
                        <?php if($message = Session::get('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <strong> <?php echo e($message); ?> </strong>
                            </div>
                        <?php elseif($message = Session::get('error')): ?>
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong><?php echo e($message); ?></strong>
                            </div>
                        <?php elseif($errors->any()): ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Please check the form below for errors
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
                                    <label for="idTerm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Term')); ?></label>

                                    <div class="col-md-6">
                                        <select id="idTerm" class="form-control <?php if ($errors->has('idTerm')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('idTerm'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="idTerm" value="<?php echo e(old('idTerm')); ?>" required autocomplete="idTerm" autofocus>
                                            <option value="0" disabled selected>-- Select Term --</option>
                                            <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($term['id']); ?>"> <?php echo e($term['academic_year'].' - '.$term['semester']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if ($errors->has('idLecturer')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('idLecturer'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="type" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Type')); ?></label>

                                    <div class="col-md-6">
                                        <select id="type" class="form-control <?php if ($errors->has('type')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('type'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="type" value="<?php echo e(old('type')); ?>" required autocomplete="type" autofocus>
                                            <option value="0" disabled selected>-- Select PKM Type --</option>
                                            <option value="PKM KC">PKM Karsa Cipta</option>
                                            <option value="PKM GT">PKM Gagasan Tertulis</option>
                                            <option value="PKM GFK">PKM Gagasan Futuristik Konstruktif</option>
                                        </select>
                                        <?php if ($errors->has('type')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('type'); ?>
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
                    <div class="card-header">Session List</div>

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

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pkm_Copy\resources\views/admin/session.blade.php ENDPATH**/ ?>