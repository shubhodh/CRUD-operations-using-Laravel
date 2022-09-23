<html>
    <head>
        <title>CRUD APP</title>
    </head>
    <body>
        <h3>New User? Dont Have an account?</h3>
        <a href="<?php echo e(route("create")); ?>">Sign up</a>
        <br>
        <h3>Already have an account?</h3>
        <form action="<?php echo e(route('check')); ?>" method="get">
            <?php echo csrf_field(); ?>
            
            Username:<input type="text" name="username"><br>
            Password:<input type="text" name="password"><br>
            <input type="submit" name="submit">
        </form>
        <br>
        <h3>Delete an existing account?</h3> 
        <a href="<?php echo e(route("delete")); ?>">Delete</a>  
        <br> 
        <h3>Change password?</h3> 
        <a href="<?php echo e(route("update1")); ?>">Update</a>  
    </body>
</html><?php /**PATH C:\xampp\htdocs\crud2\resources\views/index.blade.php ENDPATH**/ ?>