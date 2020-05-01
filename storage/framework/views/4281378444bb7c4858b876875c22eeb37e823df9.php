<?php $__env->startSection('title','Upload PKM'); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function fileValidation(){
            var fileInput = document.getElementById('file');
            var filePath = fileInput.value;
            var allowedExtensions = /(\.doc|\.docx)$/i;
            if(!allowedExtensions.exec(filePath)) {
                alert('Please upload file having extensions .doc and .docx only.');
                fileInput.value = '';
                return false;
            }

            var fi = document.getElementById('file'); // GET THE FILE INPUT.

            // VALIDATE OR CHECK IF ANY FILE IS SELECTED.
            if (fi.files.length > 0) {
                // RUN A LOOP TO CHECK EACH SELECTED FILE.
                for (var i = 0; i <= fi.files.length - 1; i++) {

                    var fsize = fi.files.item(i).size;      // THE SIZE OF THE FILE.
                    var fsize_real = Math.round((fsize / 1024));

                    if(fsize_real >= 5120){
                        alert("File Size too Big");
                        return false;
                    }
                }
            }
        }

    </script>
<?php $__env->stopSection(); ?>
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

        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Uploads Detail</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 text-right">Session :</div>
                        <div class="col-8"><?php echo e($session['session']); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-right">Deadline :</div>
                        <div class="col-8"><?php echo e($session['deadline']); ?></div>
                    </div>
                    <form action="<?php echo e(url('upload')); ?>" method="post" enctype="multipart/form-data"
                           onsubmit="return fileValidation()" >
                        <div class="row">
                            <div class="col-4 text-right">Upload File</div>
                                <?php echo csrf_field(); ?>
                                <div class="col-8">
                                        <input type="text" name="idPkm" id="idPkm" value="<?php echo e($pkm->id); ?>" hidden>
                                        <input type="text" name="session_id" id="session_id" value="<?php echo e($session->id); ?>" hidden>
                                        <input type="file" name="file" id="file" required>
                                </div>
                        </div>
                        <div class="text-danger">Notes:</div>
                        <div class="row">
                            <ul class="list-group">
                                <li class="list-group-item text-danger border-0"> 1. PKM yang diupload adalah PKM yang sudah Final dan sudah direvisi</li>
                                <li class="list-group-item text-danger border-0"> 2. Extension File harus menggunakan .doc atau .docx</li>
                                <li class="list-group-item text-danger border-0"> 3. Maximal dari ukuran file adalah 5 MB</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-4 text-left mt-3">
                                <button type="submit" class="btn btn-primary px-5">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                            </div>
                        </div>
                    </form>


                </div>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Falih M\pkm_Copy\resources\views/user/upload.blade.php ENDPATH**/ ?>