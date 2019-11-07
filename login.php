<?
/*
File name:login.php
group name:group02
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
    include "db.php";
    ?>
    <link href="./css style/webd3201.css" rel="stylesheet" type="text/css">
</header>

<body>

    <?php
    $userIDlogin = $_SESSION['userID'];
    $userPasswordLogin = $_SESSION['userPassword'];
    $loginsuccess=$_SESSION['loginsuccess'];
    $loginbtn=$_POST['loginbtn']
    ?>
    <br>
    <br>
    <br>
    <br>
    <div align=center>
        <!--This is for the user to input to login-->
        <form method="POST" action="<?php echo htmlspecialchars($_SREVER["PHP_SELF"]); ?>">
            <p>Please enter your username or email<input type=text name=userID value=""></p>
            <p>Please enter your password<input type=password name=userPassword value=""></p>
            <input type=submit name=loginbtn value=login>
        </form>
    </div>
    <?
    $string_arg = $userPasswordLogin;

    md5($string_arg);

    $sql = "SELECT user_id, usertype FROM users WHERE $userIDLogin=user_id and $string_arg= password;";
    $result = result($sql);

    if ($result[1]=='s'){
        header("Location:./admin.php");
        $loginsuccess=true;
    }
    else{
        $loginsuccess=true;
        header("Location:./welcome.php");
    }
    ?>
</body>

</html>