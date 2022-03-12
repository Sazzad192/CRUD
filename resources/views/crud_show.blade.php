<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-hight">

            <a href="create">Inseart user</a>
            <br>
                {{session('warning')}}
            <br>
            <table>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Created At</td>
                    <td>Action</td>
                </tr>
                @foreach ($crudArr as $crud)
                <tr>
                    <td>{{$crud->id}}</td>
                    <td>{{$crud->name}}</td>
                    <td>{{$crud->created_at}}</td>
                    <td><a href="delete/{{$crud->id}}">Delete</a></td>
                    <td><a href="edit/{{$crud->id}}">edit</a></td>
                </tr>
                @endforeach
            </table>
        </div> 
    </body>
</html>
