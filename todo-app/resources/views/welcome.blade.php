<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container mt-3">
    <h2 >Todo Application</h2>
        <form action="{{route('saveTodo')}}" method="post">
            @csrf
            <div>
              <input type="text" placeholder="Enter todo" name="todo" >
            </div>
            <div>
            <button class="btn btn-primary" style="margin-top: 15px" type="submit">Save</button>
            </div>
        </form>
        <table class="table table-bordered mt-3 text-center">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Todo Item</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

              </tr>
            </thead>
            <tbody>
                {{-- @int{ $sn=0}; --}}
                @foreach ($list as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->title}}</td>
                    <td>
                        <button class="btn btn-primary"><a href="{{url('/edit/'.$value->id)}}" class="text-white"><span class="fas fa-pencil ml-3"></a></button>
                    </td>
                    <td>
                        {{-- <button class="btn btn-danger"><a href="delete/{{ $value->id}}" class="text-white"><span class="fas fa-trash ml-3"></a></button> --}}
                        <button class="btn btn-danger"><a href="{{url ('/delete/'.$value->id)}}" class="text-white"><span class="fas fa-trash ml-3"></a></button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>
</html>
