<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хеширование ripemd160</title>
</head>

<body>
    <form action="/api/hash" method="POST">
        <input name="src" type="text" placeholder="Исходное сообщение">
        <button type="submit">Хешировать</button>
    </form>
</body>
<style>
    form {
        display: flex;
    }

    form>button {
        margin-left: 5px;
    }

    form>input {
        width: 250px;
    }
</style>

</html>