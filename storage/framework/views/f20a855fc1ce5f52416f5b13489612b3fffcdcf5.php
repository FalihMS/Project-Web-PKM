<?php $__env->startSection('title', 'Pengumpulan PKM - Login Page'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col xs-12 center_div">

                        <form method="POST" action="<?php echo e(route('login')); ?>" class="form-container">
                            <?php echo csrf_field(); ?>
                            <h2 class="a">Log-In</h2>
                            <div class="form-group">
                                <label for="email"> <?php echo e(__('E-Mail Address')); ?> </label>

                                    <input id="email" type="email"
                                           class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email"
                                           value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

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
                                           required autocomplete="current-password">

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

                                    <button type="submit" class="btn btn-primary btn-block">
                                        <?php echo e(__('Login')); ?>

                                    </button>

                                <small>Don't have an account?<a href="<?php echo e(route('register')); ?>">Sign Up</a></small>






                            </div>
                        </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pkm_Copy\resources\views/auth/login.blade.php ENDPATH**/ ?>