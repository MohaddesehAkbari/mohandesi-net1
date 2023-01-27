<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فروشگاه</title>
</head>
<body>
  <a href="{{route('add')}}">افزودن کالا</a>
      <h3>kala list </h3>
    <table>
      <thead>
        <th>id</th>
        <th>title</th>
        <th>price</th>
        <th>image</th>
        <th>عملیات</th>
      </thead>
      <tbody>
    
        @foreach ($kala as $kala)
        <tr>
          <td><?php echo $kala->id ?></td>  
          <td><?php echo $kala->title ?></td>
          <td><?php echo $kala->price ?></td>
          <td><?php echo $kala->image ?></td>
          <td><a href="edit">ویرایش</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <?php

    ?>
</body>
</html>