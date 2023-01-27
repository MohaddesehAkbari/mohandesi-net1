<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>kala list </h1>
    <table>
      <thead>
        <th>id </th>
        <th>title</th>
        <th>price</th>
        <th>image</th>
      </thead>
      <tbody>
        <tbody>
          <?php foreach ($kalas as $kala ): ?>
          <th><?php echo $kalas->id ?></th>
          <th><?php echo $kalas->title ?></th>
          <th><?php echo $kalas->price ?></th>
          <th><?php echo $kalas->image ?></th>
        </tbody>
      </tbody>
    </table>
    <?php 
    dd($kalaS);
    ?>
</body>
</html>