<?php $__env->startSection('title', 'Form Pengajuan Cuti'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
      <?php if(session('status')): ?>
        <div class="alert alert-danger">
          <?php echo e(session('status')); ?>

        </div>
      <?php endif; ?>
      <div class="row mx-auto">
        <div class="col">
          <h3 class="mb-4"><i class="fas fa-calendar-alt"></i> Form Pengajuan Cuti</h3>
          <form action="<?php echo e(url('/cuti')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="karyawan">Karyawan</label>
              <input type="text" class="form-control <?php $__errorArgs = ['karyawan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="karyawan" id="karyawan" value="<?php echo e(auth()->user()->nama); ?>" readonly>
              <?php $__errorArgs = ['karyawan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
              <label for="jencut">Jenis Cuti</label>
              <select  class="form-control <?php $__errorArgs = ['jencut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jencut" id="jencut">
                  <option value="">-- Pilih Jenis Cuti --</option>
                <?php $__currentLoopData = $jencut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($j->id); ?>"><?php echo e($j->jenis_cuti); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <?php $__errorArgs = ['jencut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group row">
              <div class="col-6">
                <label for="awal">Awal Cuti</label>
                <input type="text" class="form-control <?php $__errorArgs = ['awal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="awal" id="datePickerAwalCuti" value="<?php echo e(old('awal')); ?>">
                <?php $__errorArgs = ['awal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="col-6">
                <label for="akhir">akhir Cuti</label>
                <input type="text" class="form-control <?php $__errorArgs = ['akhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="akhir" id="datePickerAkhirCuti" value="<?php echo e(old('akhir')); ?>">
                <?php $__errorArgs = ['akhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="form-group" id="containerTotalCuti">
            </div>
            <div class="form-group">
              <label for="alasan">Alasan Cuti</label>
              <textarea class="form-control <?php $__errorArgs = ['alasan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alasan" id="alasan" rows="3"><?php echo e(old('alasan')); ?></textarea>
                <?php $__errorArgs = ['alasan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit" class="btn btn-success float-right">Submit</button>
            <a href="<?php echo e(url('/cuti')); ?>" class="btn btn-danger float-right mr-2">Kembali</a>
          </form>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<script>
  $(document).ready(function(){
    $("#jencut").change(function () {
      const jencut = $("#jencut").val();
      if (jencut == 1) {
        $.ajax({
          type: 'get',
          dataType: 'html',
          success: function () {
            $("#containerTotalCuti").html(`
              <div id="totalCuti">
                <label for="totalCuti">Total Cuti</label>
                <input type="number" min="1" max="12" class="form-control <?php $__errorArgs = ['totalCuti'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="totalCuti" value="<?php echo e(old('totalCuti')); ?>">
                <?php $__errorArgs = ['totalCuti'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
              </div>
            `);
          }
        });
      } else {
        $("#totalCuti").hide();
      }
    });

    const pickerAwalCuti = datepicker('#datePickerAwalCuti', {
      minDate: new Date(<?php echo e(date('Y')); ?>, <?php echo e(date('m')-1); ?>, <?php echo e(date('d')+1); ?>),
      noWeekends: true
    });
    const pickerAkhirCuti = datepicker('#datePickerAkhirCuti', {
      minDate: new Date(<?php echo e(date('Y')); ?>, <?php echo e(date('m')-1); ?>, <?php echo e(date('d')+2); ?>),
      noWeekends: true
    });

  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/template-home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Folder_iqbal\Prakerin\projek_pkl\Program_Cuti\dev-project\resources\views/cuti/create.blade.php ENDPATH**/ ?>