<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>php3-1</title>
</head>
<body>
  <h1>掲示板</h1>

  <h2>新規投稿</h2>

  <form  method="post">
    name: <input type="text" name="name">
    <p>投稿内容</p><textarea name="content" id="" cols="30" rows="10"></textarea>
    <p><input type="submit" value="投稿"></p>
  </form>

  <h2>投稿内容一覧</h2>

  <div class="post">
    <p>No:1</p>
    <p>名前:test</p>
    <p>投稿内容:testtest</p>
  </div>

</body>
</html>
