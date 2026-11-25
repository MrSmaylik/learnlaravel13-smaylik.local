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
    <h1>Список пользователей</h1>
    @foreach($users as $user)
        <div>
            <p>{{$user->id}}</p>
            <p>{{$user->name}}</p>
            <p>{{$user->surname}}</p>
            <p>{{$user->patronymic ?? 'Отчества нет(('}}</p>
            <p>{{$user->email}}</p>
        </div>
    @endforeach
</body>
</html>
