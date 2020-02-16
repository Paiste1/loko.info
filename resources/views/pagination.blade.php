<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
{{-- после создаем конроллер php artisan make:controller Pagination --}}
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Почта</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $v)
            <tr>
                <th scope="row">{{ $v->id }}</th>
                <td>{{ $v->name }}</td>
                <td>{{ $v->email }}</td>
            </tr>@endforeach
        </tbody>
    </table>
{{ $users->links() }}
</div>

</body>
</html>
