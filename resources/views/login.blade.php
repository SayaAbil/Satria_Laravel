<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>halaman login</h1>
    <br>
    <form action="{{ route('/login')}}" method="POST">
        Email <input type="email" name="email"
        placeholder="Masukan email">
        <br>
        Password <input type="password" name="password"
        placeholder="Masukan password">
        <br>
        <button type="submit"> Login </button>
</body>
</html>