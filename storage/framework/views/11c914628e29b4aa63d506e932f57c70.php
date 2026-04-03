

<?php $__env->startSection('content'); ?>
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="text-center w-75 m-auto">
    <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
</div>

<form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label for="email" class="form-label"><?php echo e(__('Email Address')); ?></label>
        <input id="email" type="email"
            class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label"><?php echo e(__('Password')); ?></label>
        <input id="password" type="password"
            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            name="password" required autocomplete="current-password">

        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

   

    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox"
                   name="remember" id="remember"
                   <?php echo e(old('remember') ? 'checked' : ''); ?>>
            <label class="form-check-label" for="remember">
                <?php echo e(__('Remember Me')); ?>

            </label>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                <?php echo e(__('Login')); ?>

            </button>
        </div>
    </div>
</form>

<!-- jQuery (Required for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#cid').select2({
            placeholder: "-- Choose Company --",
            allowClear: true,
            width: '100%'
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/erplive/public_html/premiertax/resources/views/auth/login.blade.php ENDPATH**/ ?>