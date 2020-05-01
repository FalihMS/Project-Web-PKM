<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                            <a href="<?php echo e(url('/admin/showLecturer')); ?>" class="btn btn-outline-info">Edit Lecturer</a>
                            <a href="<?php echo e(url('/admin/showSession')); ?>" class="btn btn-outline-info">Edit Session</a>
                            <a href="<?php echo e(url('/admin/showAll')); ?>" class="btn btn-outline-info">View All PKM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Falih\PhpstormProjects\pkm\resources\views/admin/index.blade.php ENDPATH**/ ?>