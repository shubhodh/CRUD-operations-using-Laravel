<html>
    <head>
        
    </head>
    <body>
        <form action="<?php echo e(route('store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            Username:<input type="text" name="username"><br>
            Password:<input type="text" name="password" id=""><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\crud2\resources\views/create.blade.php ENDPATH**/ ?>