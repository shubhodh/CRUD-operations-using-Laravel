<html>
<form action="<?php echo e(route('destroy')); ?>" method="post">
    <?php echo csrf_field(); ?>
    
    Username:<input type="text" name="username"><br>
    Password:<input type="text" name="password"><br>
    <input type="submit" name="submit">
</form>
</html><?php /**PATH C:\xampp\htdocs\crud2\resources\views/delete.blade.php ENDPATH**/ ?>