<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Update Task</title>
</head>
<body>
    <div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="/updatetask/{{$taskdata->id}}" method="post">
    {{@csrf_field()}}
    <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
    <input type="hidden" name="id" value="{{$taskdata->id}}"/>
    <input type="submit" class="btn btn-warning" value="Update"/>
    &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancle"/>
    </from>
    </div>
</body>
</html>
