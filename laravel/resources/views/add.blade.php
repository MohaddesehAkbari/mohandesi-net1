<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('addpost')}}" method="POST">
        <label for="titlt">text</label>
        <input id="title" type="text" name="text" value="" placeholder="">
        <label for="price">price</label>
        <input id="price" type="text" name="price" value="" placeholder="">
        <label for="image">image</label>
        <input id="image" type="text" name="image" value="" placeholder="">
        <input type="submit" value="ذخیره">
    <form>


</body>
</html>