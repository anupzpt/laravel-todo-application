<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Edit</title>
</head>
<body>

    <div class="container mt-3">
    <h2 >Todo Application Edit</h2>
        <form action="{{route('updateTodo')}}" method="post">
        @csrf
            <div>
              <input type="text" name="todo" value={{$data->title}}>
              <input type="hidden" name="id" value={{$data->id}}>
            </div>
            <div>
            <button class="btn btn-primary" style="margin-top: 15px" type="submit">Update</button>
            </div>
        </form>
  </div>
</body>
</html>
