<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="text-align: center;">
        <th>
            <td>Name</td>
            <td>Email</td>
            <td>Number</td>
            <td>action</td>
        </th>
        @foreach($setting as $key)
        <tbody>
            <td>{{$key->name}}</td>
            <td>{{$key->email}}</td>
            <td>{{$key->number}}</td>
            <td>
                <a href="edit/{{$key->id}}">edit</a> 
                <a href="delete/{{$key->id}}">delete</a>
            </td>
        </tbody>
        @endforeach

    </table>

   

</body>
</html>