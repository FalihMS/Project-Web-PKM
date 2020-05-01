<?php $__env->startSection('title', 'Admin Term'); ?>

<?php $__env->startSection('script'); ?>
<script>










































$(document).ready(function () {
    $('#editModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipient = button.data('whatever'); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-body input').val(recipient)
    })
})
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Term</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(url('term')); ?>" method="POST" >
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Term name')); ?></label>

                                <div class="col-md-2">
                                    <input id="academic_year1" type="number" class="form-control <?php if ($errors->has('academic_year1')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('academic_year1'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="academic_year1"  required autofocus
                                     placeholder="2020" min="2019">

                                    <?php if ($errors->has('academic_year1')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('academic_year1'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <div class=""><h3>/</h3></div>
                                <div class="col-md-2">
                                    <input id="academic_year2" type="number" class="form-control <?php if ($errors->has('academic_year2')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('academic_year2'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="academic_year2"  required autofocus
                                           placeholder="2021">

                                    <?php if ($errors->has('academic_year1')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('academic_year1'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                                    <?php if ($errors->has('academic_year2')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('academic_year2'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="semester" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Semester')); ?></label>

                                <div class="col-md-6">

                                    <select name="semester" id="semester" class="form-control" required>
                                        <option selected>Genap</option>
                                        <option>Ganjil</option>
                                    </select>
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
                    <div class="card-header">Term List</div>

                    <div class="card-body">
                        <table class="w-100 table" >
                            <tr>
                                <th>Name</th>
                                <th>Semester</th>
                                <th>Active</th>
                            </tr>
                            <?php if(sizeof($term) == 0): ?>
                                <tr>
                                    <td colspan="3"> There is no data</td>
                                </tr>
                            <?php else: ?>
                                <?php $i = 0?>
                                <?php $__currentLoopData = $term; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($term['academic_year']); ?></td>
                                        <td><?php echo e($term['semester']); ?></td>
                                        <td><?php echo e($term['status']); ?></td>
                                        <?php if($term['status'] == 'active'): ?>
                                            <td>
                                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#editModal"
                                                        data-whatever=<?php echo e($term['id']); ?>>Deactived</button>
                                            </td>
                                        <?php elseif($term['status'] == 'inactive'): ?>
                                            <td>
                                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#editModal"
                                                        data-whatever=<?php echo e($term['id']); ?>>Activated</button>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </table>


                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Verification</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="<?php echo e(url('term/status')); ?>" >
                                        <?php echo csrf_field(); ?>
                                        <div class="modal-body">
                                                <div class="align-content-center">
                                                    <h3>Proceed?</h3>
                                                </div>
                                            <input type="text" class="form-control" id="recipient-name" name="id" hidden>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                            <button type="submit" class="btn btn-primary" value="submit">Yes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pkm_Copy\resources\views/admin/term.blade.php ENDPATH**/ ?>