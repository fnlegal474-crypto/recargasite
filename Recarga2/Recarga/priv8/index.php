<?php
error_reporting(0);
include("./../jquery.php");
ob_start();
session_start();
if (isset($_POST['user']) && isset($_POST['pass'])) {
    if ($_POST['user'] == "hypn" && $_POST['pass'] == "hypn2023") {
        $_SESSION['auth_recarga'] = true;
    } else {
        $_SESSION['auth_recarga'] = false;
    }
}
if ($_SESSION['auth_recarga'] == true) {
    require("./admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cPanel Login</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: sans-serif;
            color: #fafafa;
        }

        body {
            min-height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        main img {
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
        }

        .login {
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 2;
            background-color: rgba(0, 0, 0, .6);
        }

        .login form {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            text-align: center;
            width: 450px;
            height: 450px;
            border: 2px solid rgba(255, 255, 255, .1);
            border-radius: 125px 25px;
            background-color: rgba(255, 255, 255, .2);
            backdrop-filter: blur(5px);
            -webkit-filter: drop-shadow(0px 0px 1px rgba(0, 0, 0, 0.45)) !important;
        }

        .login form h1 {
            font-size: 30pt;
        }

        .login form .input {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 300px;
            height: 250px;
            padding: 5pt;
        }

        .login form .input .i {
            display: flex;
            flex-direction: column;
            padding: 7pt;
        }

        .login form .input .i label {
            text-align: left;
            left: 0;
            font-size: 11pt;
            margin-bottom: 1pt;
        }

        .login form .input .i input {
            font-size: 15pt;
            background: none;
            border: none;
            border-bottom: 2px solid rgba(255, 255, 255, .2);
            color: #fafafa;
            outline: none;
        }

        .login form button {
            font-size: 30pt;
            padding: 5pt;
            margin-bottom: 25pt;
            background-color: rgba(255, 255, 255, .1);
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 5pt;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <main>
        <img src="./../back.gif" alt="">
        <div class="login">
            <form action="./" method="POST">
                <h1>cPanel Login</h1>
                <div class="input">
                    <div class="i">
                        <label for="user">Usuário</label>
                        <input type="text" id="user" name="user" placeholder="Digite aqui..." required minlength="4">
                    </div>
                    <div class="i">
                        <label for="pass">Senha</label>
                        <input type="text" id="pass" name="pass" placeholder="Digite aqui..." required minlength="4">
                    </div>
                </div>
                <button type="submit">ENTRAR</button>
            </form>
        </div>
    </main>
</body>

</html>