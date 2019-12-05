<?php
/*
file name:aup.php
name: group_02
description: this is to say that the user has been disabled due to a error
*/
?>

<html>

<header>
    <?php

    /*This is to include the php files header and footer as well as pass a title variable*/
    $_SESSION['title'] = $title = "Vision Real Estate";
    require "header.php";
    include "footer.php";
    include "constants.php";
    include "functions.php";
    ?>
    <link href="./css style/webd3201.css" rel="stylesheet" type="text/css">
</header>

<body>
    <br />
    <br />
    <br />
    <br />
    <h3>Your account has been disabled because you have posted something illegal or inapropiate
        <br />
        
            <a href="./privacy_policy.php">privacy policy</a>
            to see our privacy policy
</body>

</html>