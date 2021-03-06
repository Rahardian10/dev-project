<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login</h1>
            </div>
            <div class="form-group">
              <input type="email" class="form-control form-control-user" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group row">
              <div class="col mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1">
              </div>
            </div>
            <a href="" class="btn btn-primary btn-user btn-block">
              Login
            </a>
          </form>
          <hr>
          <div class="text-center">
            <a class="small" href="/createkaryawan">Registrasi</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Folder_iqbal\Prakerin\projek_pkl\Program_Cuti\dev-project\resources\views/createkaryawan/login.blade.php ENDPATH**/ ?>