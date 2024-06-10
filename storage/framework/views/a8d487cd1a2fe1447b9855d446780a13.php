<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Task</h2>
    <form action="/edittask/<?php echo e($task->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input name="name" type="text" value="<?php echo e($task->name); ?>"><br>
        <input name="desc" type="text" value="<?php echo e($task->desc); ?>"><br>
        <input type="radio" name="mark" value="0" <?php echo e($task->mark == false ? "checked" : ""); ?>>INCOMPLETE
        <input type="radio" name="mark" value="1" <?php echo e($task->mark == true ? "checked" : ""); ?>>COMPLETE<br>
        <button>Update</button>
    </form>
</body>
</html><?php /**PATH C:\Users\raygj\Desktop\todoapp_demo\resources\views/edit.blade.php ENDPATH**/ ?>