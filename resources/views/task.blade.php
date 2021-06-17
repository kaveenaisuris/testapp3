<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="text-center">
<h1>Daily task</h1>
<div class="row">
<div class="col-md-12">
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alter">
{{$error}}
</div>
@endforeach
<form method="post" action="/saveTask">
{{@csrf_field()}}
<input type="text" class="form-control" name="task" placeholder="Enter your task here">
<br>
<input type="submit" class="btn btn-primary" value="SAVE">
<input type="submit" class="btn btn-warning" value="Clear">
</form>
<table class="table table-dark">
<th>ID</th>
<th>Task</th>
<th>Completed</th>
<th>Action</th>
<th>Delete</th>
<th>Update</th>

@foreach($tasks as $task)
<tr>
<td>{{$task->id}}</td>
<td>{{$task->task}}</td>
<td>
@if($task->iscompleted)
<button class="btn btn-success">Completed</button>
@else
<button class="btn btn-warning">Not Completed</button>
@endif
</td>

<td>
@if(!$task->iscompleted)
<a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>

@else
<a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a>
@endif
</td>
<td>
<a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
</td>
<td>
<a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
</td>



</tr>
@endforeach
</div>
</div>
</div>
</div>

</body>
</html>
