<?php $__env->startSection('title', 'Pengumpulan PKM - Register Page'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 center_div">

                <form method="POST" action="<?php echo e(route('register')); ?>" class="form-container">
                    <?php echo csrf_field(); ?>
                    <h2 class="a">Register</h2>
                    <div class="form-group">
                        <label for="nim">Nomor Induk Mahasiswa</label>

                        <input id="nim" type="text" class="form-control <?php if ($errors->has('nim')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nim'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                               name="nim" value="<?php echo e(old('nim')); ?>" required autocomplete="nim" autofocus
                               pattern="[0-9]{10}" placeholder="Ex: 2303847684" maxlength="10">

                        <?php if ($errors->has('nim')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nim'); ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>


                            <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                   name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus
                                   placeholder="Ex: Dimas wibowo">

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

                    <div class="form-group">
                        <label for="email">Email Address</label>


                        <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                               name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"
                               placeholder="kevin@binus.ac.id">

                        <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="password"><?php echo e(__('Password')); ?></label>

                        <input id="password" type="password"
                               class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password"
                               required autocomplete="new-password">

                        <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                    </div>

                    <div class="form-group">
                        <label for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>


                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required autocomplete="new-password">

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary btn -block">
                            <?php echo e(__('Register')); ?>

                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Falih M\pkm_Copy\resources\views/auth/register.blade.php ENDPATH**/ ?>