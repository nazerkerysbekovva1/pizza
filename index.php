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
    <section class="section1">
        <div class="tagamdar">
            <ul>
                <li>Pizza</li>
                <li>Sushi</li>
                <li>Doner</li>
                <li>Hamburger</li>
                <li>Salats</li>
                <li>Garnirs</li>
                <li>First Tagam</li>
                <li>Second Tagam</li>
                <li>Kombo</li>
            </ul>
        </div>
        <div class="mainContent">
            <div class="content">
                <h1>Алматыда дәмді пицца жеткізу</h1>
                <p>Тапсырыс беріңіз және біздің аспаздардан үлкен рахат алыңыз</p>
                <a class="btn" onclick="modalOpen()">Толығырақ   >>></a>
            </div>
        </div>
    </section>










    <div class="modal">
       <div class="modal-main">
            <h1>Sign In</h1>
            <form action="api/register.php" method="POST">
                <input type="text" name="email" placeholder="Почта или телефон">
                <input type="text" name="full_name" placeholder="Полное имя">
                <input type="text" name="nickname" placeholder="Nickname">
                <input type="password" name="password" placeholder="Введите пароль">
                <input type="password" name="password2" placeholder="Подтвердить пароль">
                <button type="submit">Sign In</button>
                <p>Dont have an account?</p>
                <a href="">Sign Up</a>
            </form>
       </div>
       <a class="x" href="" onclick="modalClose()">X</a>
    </div>

    <script src="index.js"></script>

</body>
</html>