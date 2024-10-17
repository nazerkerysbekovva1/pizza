<?php

    include "../config/baseurl.php";   // config папкасындагы baseurl.php файлымен байланысу жане сол файлдагы айнымалыларды колдану ушын
    include "../config/database.php";  // config папкасындагы database.php файлымен байланысу жане сол файлдагы айнымалыларды колдану ушын

    if(isset($_POST["email"], $_POST["password"])   // isset() функциясы инпутка жыберылген функ
        && strlen($_POST["email"]) > 2 && strlen($_POST["password"])){

            $email = $_POST["email"];
            $password = $_POST["password"];

            $user_query = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'");
            if(mysqli_num_rows($user_query) <= 0){
                header("Location: $BASE_URL/login.php?error=2");
                exit();
            }
            $user = mysqli_fetch_assoc($user_query);
            // user["email], user["password]
            $hash = sha1($password);
            if($user["password"] != $hash){
                header("Location: $BASE_URL/login.php?error=3");
                exit();
            }    


        if($user["password"] != $hash){
            header("Location: $BASE_URL/login.php?error=3");
            exit();
        }

        session_start();
        $_SESSION["id"] = $user["id"];
        $_SESSION["nickname"] = $user["nickname"];
        $_SESSION["full_name"] = $user["full_name"];
        $_SESSION["image"] = $user["image"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["description"] = $user["description"];
        $nick = $user["nickname"];
        header("Location: $BASE_URL/Profile.php?nickname=$nick");

    } else{
        header("Location: $BASE_URL/login.php?error=1");
    }