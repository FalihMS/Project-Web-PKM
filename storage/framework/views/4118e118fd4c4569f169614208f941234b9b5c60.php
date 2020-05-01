<?php $__env->startSection('title', 'Admin View'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">View All PKMs</div>

                    <div class="card-body">
                        <table class="w-100 table" >
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Class</th>
                                <th>Lecturer</th>
                                <th>Action</th>
                            </tr>
                            <?php if(sizeof($pkms) == 0): ?>
                                <tr>
                                    <td colspan="3"> There is no data</td>
                                </tr>
                            <?php else: ?>
                                <?php $i = 1?>
                                <?php $__currentLoopData = $pkms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($pkm['title']); ?></td>
                                        <td><?php echo e($pkm['class']); ?></td>
                                        <td><?php echo e($pkm->lecturer->name); ?></td>`
                                        <td><a href="<?php echo e(route('download',['id'=>$pkm['id']])); ?>">Download File</a></td>
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

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pkm_Copy\resources\views/admin/view_all.blade.php ENDPATH**/ ?>