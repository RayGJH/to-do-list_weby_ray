<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- @auth
    <p>Welcome</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form><br>
    <!--  Add Task Feature  -->
    <div>
        <h2>Create Task</h2>
        <form action="/addtask" method="POST">
            @csrf
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
            @foreach ($tasks as $item)
                <div>
                    {{$item['name']}}<br>
                    {{$item['desc']}}<br>
                    {{$item['mark'] == true ? "Complete" : "Incomplete"}}

                    <p><a href="/edittask/{{$item->id}}">Edit</a></p>
                    <form action="/deletetask/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    <!-- Show Feature -->
    @else --}}
      <!-- Login Feature -->
      <div>
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
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
            @csrf
            <input name='name' type="text" placeholder="name"><br>
            <input name='email' type="text" placeholder="email"><br>
            <input name='password' type="password" placeholder="password"><br>
            <button>Register</button>
        </form>
    </div>
<!-- Registration Feature -->
    {{-- @endauth --}}
  
</body>
</html>