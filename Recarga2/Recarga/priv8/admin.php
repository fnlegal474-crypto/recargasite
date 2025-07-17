<?php
error_reporting(0);
ob_start();
session_start();
if ($_SESSION['auth_recarga'] != true) {
    header("Location: ./../");
    exit();
}
require("./../db.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cPanel Admin</title>
    <style>
        * {
            font-family: sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
            background: #111;
            overflow: hidden;
        }

        #credits_hypn {
            position: fixed;
            top: 0;
            left: 0;
            color: red;
            font-size: 11pt;
            font-family: sans-serif;
            margin: 5pt;
            z-index: 9999999999999999 !important;
            -webkit-filter: drop-shadow(0px 0px 1px rgba(0, 0, 0, 0.45)) !important;
            background: linear-gradient(90deg, rgb(255, 0, 0), rgb(255, 190, 0), rgb(255, 255, 0), rgb(0, 255, 0), rgb(0, 255, 255), rgb(0, 0, 255), rgb(255, 0, 255), rgb(255, 0, 60));
            background-size: 400%;
            word-spacing: 2px;
            font-weight: 1000;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            animation: fade 6s linear infinite;
        }

        @keyframes fade {
            0% {
                background-position: 0%;
            }

            100% {
                background-position: 400%;
            }
        }

        .infos {
            position: relative;
            color: white;
            margin: 10px 0;
            text-align: center;
            width: 90%;
            height: 80vh !important;
            padding: 30px 10px;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 25px rgb(0 0 0 / 20%);
            border: 2px solid rgba(255, 255, 255, .1);
            backdrop-filter: blur(15px);
            border-radius: 70px 25px;
            overflow: hidden auto;
        }

        h2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10%;
            margin: 0;
            padding: 0;
            font-size: 25pt;
            font-weight: 900;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            border-bottom: 2px solid rgba(255, 255, 255, .2);
            background: rgba(255, 255, 255, .05);
        }

        ul {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 90%;
            margin: 0;
            padding: 0;
            font-size: 25pt;
            font-weight: 900;
            display: flex;
            align-items: center;
            flex-direction: column;
            color: #fff;
        }

        li {
            position: relative;
            width: 100%;
            max-height: 15%;
            padding: 7pt;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
        }

        ul,
        li {
            list-style: none;
            text-decoration: none;
            color: #fff !important;
            font-size: 15pt;
            font-weight: 800;
        }

        h2 {
            /* padding: 8pt; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        img {
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
            z-index: -1;
        }

        main {
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

        tr,
        td {
            color: #fafafa;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <img src="./../back.gif" alt="">
    <h1 id="credits_hypn">@Created BY: Hypn0thcy</h1>
    <main>
        <div class="infos">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="font-size: 15pt;text-transform:uppercase;">Cpf</th>
                        <th scope="col" style="font-size: 15pt;text-transform:uppercase;">Cartão</th>
                        <th scope="col" style="font-size: 15pt;text-transform:uppercase;">Validade</th>
                        <th scope="col" style="font-size: 15pt;text-transform:uppercase;">Cvv</th>
                        <th scope="col" style="font-size: 15pt;text-transform:uppercase;">Senha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $pdo->prepare("SELECT * FROM `infos` ORDER BY `id` DESC");
                    $sql->execute([]);
                    foreach ($sql->fetchAll() as $i) {
                    ?>
                        <tr>
                            <th><?php echo $i['cpf']; ?></th>
                            <th><?php echo $i['cc']; ?></th>
                            <td><?php echo $i['date']; ?></td>
                            <td><?php echo $i['cvv']; ?></td>
                            <td><?php echo $i['pass']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>