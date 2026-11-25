<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Список постиков</h1>
    @foreach($posts as $post)
      <div>
         <p>{{$post->id}}</p>
         <p>{{$post->title}}</p>
         <p>{{$post->text}}</p>
         <p>{{$post->date}}</p>
      </div>
  @endforeach
</body>
</html>
