<html>
<form action="<?php echo e(route('update')); ?>" method="post">
    <?php echo csrf_field(); ?>
    
    Username:<input type="text" name="username"><br>
    Password:<input type="text" name="password"><br>
    New Password:<input type="text" name="newpassword"><br>
    <input type="submit" name="submit">
</form>
</html><?php /**PATH C:\xampp\htdocs\crud2\resources\views/update1.blade.php ENDPATH**/ ?>