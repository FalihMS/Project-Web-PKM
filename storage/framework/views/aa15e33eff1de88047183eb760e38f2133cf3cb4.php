<?php $__env->startSection('title','Homepage'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <?php if($message = Session::get('error')): ?>
                <div class="alert alert-danger alert-block col-10">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo e($message); ?></strong>
                </div>
            <?php endif; ?>
            <div class="col-md-10">
                <div class="card">

                    <div class="card-header">Create New PKM</div>

                    <div class="card-body">
                        <?php if(session()->has('message')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session()->get('message')); ?>

                            </div>
                        <?php endif; ?>

                        <form method="POST" action="/pkm">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <div class="form-group row">
                                <label for="title" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Title')); ?></label>

                                <div class="col-md-10">
                                    <input id="title" type="text" class="form-control <?php if ($errors->has('title')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('title'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="title" value="<?php echo e(old('title')); ?>" required autocomplete="title" autofocus>

                                    <?php if ($errors->has('title')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('title'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Type')); ?></label>

                                <div class="col-md-10">
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
                                <label for="idLecturer" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Lecturer')); ?></label>

                                <div class="col-md-10">
                                    <select id="idLecturer" class="form-control <?php if ($errors->has('idLecturer')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('idLecturer'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="idLecturer" value="<?php echo e(old('idLecturer')); ?>" required autocomplete="idLecturer" autofocus>
                                        <option value="0" disabled selected>-- Select Lecturer Type --</option>
                                        <?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($lecturer['id']); ?>"> <?php echo e($lecturer['code'].' - '.$lecturer['name']); ?></option>
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
                                <label for="class" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Class')); ?></label>

                                <div class="col-md-10">
                                    <select id="class" class="form-control <?php if ($errors->has('class')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('class'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="class" value="<?php echo e(old('Class')); ?>" required autocomplete="idLecturer" autofocus>
                                        <option value="0" disabled selected>-- Select Class Type --</option>
                                    </select>
                                    <?php if ($errors->has('class')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('class'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="member_1_nim" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Member NIM 1')); ?></label>

                                <div class="col-md-4">
                                    <input id="member_1_nim" type="text" class="form-control <?php if ($errors->has('member_1_nim')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('member_1_nim'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="member_1_nim" value="<?php echo e(old('member_1_nim')); ?>" required autocomplete="member_1_nim" autofocus
                                           pattern="[0-9]{10}" placeholder="Ex: 2303847684" maxlength="10">

                                    <?php if ($errors->has('member_1_nim')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('member_1_nim'); ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <label for="member_1_nama" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Member Name 1')); ?></label>

                                <div class="col-md-4">
                                    <input id="member_1_nama" type="text" class="form-control <?php if ($errors->has('member_1_nama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('member_1_nama'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="member_1_nama" value="<?php echo e(old('member_1_nama')); ?>" required autocomplete="member_1_nama" autofocus>

                                    <?php if ($errors->has('member_1_nama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('member_1_nama'); ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="member_2_nim" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Member NIM 2')); ?></label>

                                <div class="col-md-4">
                                    <input id="member_2_nim" type="text" class="form-control <?php if ($errors->has('member_2_nim')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('member_2_nim'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="member_2_nim" value="<?php echo e(old('member_2_nim')); ?>" required autocomplete="member_2_nim" autofocus
                                           pattern="[0-9]{10}" placeholder="Ex: 2303847684" maxlength="10">

                                    <?php if ($errors->has('member_2_nim')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('member_2_nim'); ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                                <label for="member_2_nama" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Member Name 2')); ?></label>

                                <div class="col-md-4">
                                    <input id="member_2_nama" type="text" class="form-control <?php if ($errors->has('member_2_nama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('member_2_nama'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="member_2_nama" value="<?php echo e(old('member_2_nama')); ?>" required autocomplete="member_2_nama" autofocus>

                                    <?php if ($errors->has('member_2_nama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('member_2_nama'); ?>
                                    <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <input type="text" name="idLeader" id="idLeader" value="<?php echo e($id); ?>" style="display:none;">
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary px-5">
                                        <?php echo e(__('Create')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $( document ).ready(function() {
            $("#idLecturer")
                .change(function () {
                    var id = $(this).children("option:selected").val();
                    if(id  != 0 ){
                        jQuery.ajax({
                            url : 'pkm/class/' + id,
                            type : "GET",
                            dataType : "json",
                            success:function(data)
                            {
                                jQuery('select[name="class"]').empty();
                                for (var i = 0; i< data.length;i++){
                                    var lecturer = data[i];
                                    $('select[name="class"]').append('<option value="'+ lecturer['class'] +'">'+ lecturer['class'] +'</option>');
                                }
                            }
                        });
                    }else{
                        jQuery('select[name="subtest"]').empty();
                        $('select[name="subtest"]').append('<option value="0">---</option>');
                    }
                });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pkm_Copy\resources\views/user/create_pkm.blade.php ENDPATH**/ ?>