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

            <a href="home"> Back to menu </menu></a>
            <br> <br>
            <form method="post" action="{{route('update',[$crudArr->id])}}">
                @csrf
                <table>
                    <tr>
                        <td>Name</td>
                       <td><input type="textname" name="name" required value="{{$crudArr->name}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                       <td><input type="submit" name="submit"></td>
                    </tr>
                </table>
            </form>
        </div> 
    </body>
</html>
