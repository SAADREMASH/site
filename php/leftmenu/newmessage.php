<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/navbarStyle.css">
    <link rel="stylesheet" type="text/css" href="../css/leftmenu.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <title>Document</title>
</head>

<body>
    <nav>

        <ul class="header_menu">
            <?php
            session_start();
            if (!isset($_SESSION["id"])) {
                header("location: index.php");
            }
            $photo =  $_SESSION["profile_img"];
            ?>

            <li><a href="../accueil.php">Accueil</a></li>
            <li><a href="../profil.php"><img src="<?php echo $photo ?>" width=40 height=40></a></li>
            <li><a href="../actions/logout.php">SE DECONNECTER</a></li>
        </ul>
    </nav>

    <main>
        <ul class="links">
            <li><a href="newmessage.php">Nouveau Message</a></li>
            <li><a href="sendmessge.php">Messages Envoyés</a></li>
            <li><a href="receivemessage.php">Messages Recus</a></li>
            <li><a href="notifications.php">Notifications</a></li>
            <li><a href="friends.php">Amis</a></li>
        </ul>
    </main>

    <footer>

    </footer>

</body>

</html>