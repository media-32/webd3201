<?
/*
File name:index.php
Names:
group name:
Description: This will be the main page that will the main page
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
    <br>
    <br>
    <br>
    <br>
    <div align=center>
<!--This is for the user to input to login-->
        <form method="POST" action="<?php echo htmlspecialchars($_SREVER["PHP_SELF"]); ?>">
            <p>Please enter your username or email<input type=text name=userID value=""></p>
            <p>Please enter your password<input type=password name=userPassword value=""></p>
        </form>
    </div>
</body>

</html>