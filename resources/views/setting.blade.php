<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello Setting</h1>
    {{-- {{$edit->name}} --}}

    <form action="{{route('save.setting')}}" method="post">
        @csrf
        <input type="hidden" name="id" @if(!empty($edit->id)) value="{{$edit->id}}" @endif>

        <input name="name" type="text" @if(!empty($edit->name)) value="{{$edit->name}}" @endif>
        <input name="email" type="text" @if(!empty($edit->email)) value="{{$edit->email}}" @endif>
        <input name="number" type="number" @if(!empty($edit->number)) value="{{$edit->number}}" @endif>
        <button>Save</button>
    </form>
</body>
</html>