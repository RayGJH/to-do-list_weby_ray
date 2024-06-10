<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Welcome</p>
        <form action="/logout" method="POST">
            <?php echo csrf_field(); ?>
            <button>Logout</button>
        </form><br>
        <!--  Add Task Feature  -->
        <div>
            <h2>Create Task</h2>
            <form action="/addtask" method="POST">
                <?php echo csrf_field(); ?>
                <input name="name" type="text" placeholder="name"><br>
                <input name="desc" type="text" placeholder="description"><br>
                <input type="radio" name="mark" value="0">INCOMPLETE
                <input type="radio" name="mark" value="1">COMPLETE<br>
                <button>Add Task</button>
            </form>
        </div>
    <!-- Add Task Feature -->
            <!--  Show Feature  -->
            <div>
                <h2>All Task</h2>
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <?php echo e($item['name']); ?><br>
                        <?php echo e($item['desc']); ?><br>
                        <?php echo e($item['mark'] == true ? "Complete" : "Incomplete"); ?>


                        <p><a href="/edittask/<?php echo e($item ->id); ?>">Edit</a></p>
                        <form action="/deletetask/<?php echo e($item ->id); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button>Delete</button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <!-- Show Feature -->
</body>
</html><?php /**PATH C:\Users\raygj\Desktop\todoapp_demo\resources\views/show.blade.php ENDPATH**/ ?>