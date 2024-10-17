<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<header>
        <div class="header-box1">
            <div class="menu-box">
                <h3>МӘЗІР</h3>
            </div>
            <div class="menu-box2">
                <a href="">МӘЗІР ></a>
                <a href="">БІЗ ЖАЙЛЫ</a>
                <a href="">ЖЕТКІЗУ ></a>
                <a href="">ТӨЛЕМ</a>
                <a href="">КОНТАКТЫ</a>
            </div>
        </div>
        <div class="header-box2">
            <p>Жедел желі: +7 700 375 0001</p>
        </div>
    </header>

    <div class="login">
       <div class="modal-main login">
            <h1>Sign In</h1>
            <form action="api/login.php" method="POST">
                <input type="text" name="email" placeholder="Почта или телефон">
                <input type="password" name="password" placeholder="Введите пароль">
                <button type="submit">Login</button>
                <p>Dont have an account?</p>
                <a href="">Sign Up</a>
            </form>
       </div>
       <a class="x" href="" onclick="modalClose()">X</a>
    </div>

    <script src="index.js"></script>

</body>
</html>