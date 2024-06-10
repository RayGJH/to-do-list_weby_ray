<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      <!-- Login Feature -->
      <div>
        <h2>Login</h2>
        <form action="/login" method="POST">
            <?php echo csrf_field(); ?>
            <input name='lname' type="text" placeholder="name"><br>
            <input name='lpassword' type="password" placeholder="password"><br>
            <button>Login</button>
        </form>
    </div>
<!-- Login Feature -->

  <!-- Registration Feature -->
    <div>
        <h2>Registration</h2>
        <form action="/register" method="POST">
            <?php echo csrf_field(); ?>
            <input name='name' type="text" placeholder="name"><br>
            <input name='email' type="text" placeholder="email"><br>
            <input name='password' type="password" placeholder="password"><br>
            <button>Register</button>
        </form>
    </div>
<!-- Registration Feature -->
    
  
</body>
</html><?php /**PATH C:\Users\raygj\Desktop\todoapp_demo\resources\views/home.blade.php ENDPATH**/ ?>