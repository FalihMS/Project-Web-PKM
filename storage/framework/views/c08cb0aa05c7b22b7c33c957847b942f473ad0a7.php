<?php $__env->startSection('title', 'Add Admin'); ?>
<?php $__env->startSection('content'); ?>
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="card">
                   <div class="card-header">
                       Add Admin
                   </div>

                   <div class="card-body">

                       <?php if(session('status')): ?>
                           <div class="alert alert-success" role="alert">
                               <?php echo e(session('status')); ?>

                           </div>
                       <?php endif; ?>

                       <form action=<?php echo e(url('adminRegister')); ?> method="post">
                           <?php echo csrf_field(); ?>
                           <div class="form-group row">
                               <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Admin Name')); ?></label>

                               <div class="col-md-6">
                                   <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus
                                          placeholder="Ex: Agus Wijaya">

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
                               <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Admin Email')); ?></label>

                               <div class="col-md-6">
                                   <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus
                                          placeholder="agus.wibowo@binus.ac.id">

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
                           </div>
                           <div class="form-group row">
                               <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Admin Password')); ?></label>

                               <div class="col-md-6">
                                   <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" value="<?php echo e(old('password')); ?>" required autocomplete="password" autofocus minlength="8" placeholder="Min 8 Characters">

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
                   <div class="card-header">Admin List</div>

                   <div class="card-body">
                       <table class="w-100 table" >
                           <tr>
                               <th>Name</th>
                               <th>Email</th>

                           </tr>
                           <?php if(sizeof($users) == 0): ?>
                               <tr>
                                   <td colspan="3"> There is no data</td>
                               </tr>
                           <?php else: ?>
                               <?php $i = 0?>
                               <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr>
                                       <td><?php echo e($user->name); ?></td>
                                       <td><?php echo e($user->email); ?></td>



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



<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pkm_Copy\resources\views/admin/add_admin.blade.php ENDPATH**/ ?>