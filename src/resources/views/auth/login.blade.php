<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="post">
    @csrf
        <h1>ログイン画面</h1>
        <div>
            <p>名前</p>
            <input type="text" name="name">
        </div>
        <div>
            <p>Eメール</p>
            <input type="text" name="email">
        </div>
        <div>
            <p>パスワード</p>
            <input type="text" name="password">
        </div>
        <button type="submit">ログイン</button>
    </form>
</body>
</html> 