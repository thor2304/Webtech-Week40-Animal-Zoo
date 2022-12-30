<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create animal</title>
{{--    <link rel="stylesheet" href="{{asset('css/custom.css')}}">--}}
</head>
<body>
<form  action= {{ route('animals.store') }} method="POST">
    @csrf
    <div>
        <label  for="name">Name:</label>
        <input  type="text"  name="name">
    </div>
    <div>
        <label  for="type">Type:</label>
        <input  type="text"  name="type">
    </div>
    <input  type="submit">
</form>
</body>
</html>
