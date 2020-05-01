<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PKM Information</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                        <div class="row">
                            <div class="col-4 text-right">Pkm Title :</div>
                            <div class="col-8"><?php echo e($pkm['title']); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right">Pkm Type :</div>
                            <div class="col-8"><?php echo e($pkm['type']); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right">Lecturer :</div>
                            <div class="col-8"><?php echo e(strtoupper($pkm->lecturer->code . ' - ' .  $pkm->lecturer->name)); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right">Class :</div>
                            <div class="col-8"><?php echo e($pkm->class); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right">Member 1 :</div>
                            <div class="col-8"><?php echo e($pkm->member_1_nim . ' - '. $pkm->member_1_nama); ?></div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-right">Member 2 :</div>
                            <div class="col-8"><?php echo e($pkm->member_2_nim . ' - '. $pkm->member_2_nama); ?></div>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">PKM Lists</div>
                <div class="card-body">
                    <table class="w-100 table" >
                        <tr>
                            <th>No.</th>
                            <th>Session</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                        <?php if(sizeof($sessions) == 0): ?>
                            <td colspan="4"><p class="font-weight-bold text-center">There Is No Data</p></td>
                        <?php else: ?>

                            <?php $__currentLoopData = $sessions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $session): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($session['id']); ?></td>
                                    <td><?php echo e($session['session']); ?></td>
                                    <td><?php echo e($session['deadline']); ?></td>
                                    <td><a href="<?php echo e(url('/upload',['id'=>$session['id']])); ?>">Upload File</a></td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Falih\PhpstormProjects\pkm\resources\views/user/home.blade.php ENDPATH**/ ?>