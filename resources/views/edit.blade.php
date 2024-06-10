<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Task</h2>
    <form action="/edittask/{{$task->id}}" method="POST">
        @csrf
        @method('PUT')
        <input name="name" type="text" value="{{$task->name}}"><br>
        <input name="desc" type="text" value="{{$task->desc}}"><br>
        <input type="radio" name="mark" value="0" {{$task->mark == false ? "checked" : ""}}>INCOMPLETE
        <input type="radio" name="mark" value="1" {{$task->mark == true ? "checked" : ""}}>COMPLETE<br>
        <button>Update</button>
    </form>
</body>
</html>