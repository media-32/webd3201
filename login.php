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
    require_once "header.php";
    include_once "footer.php";
    include_once "constants.php";
    include_once "functions.php";
    include_once "db.php";
    ?>
    <link href="./css style/webd3201.css" rel="stylesheet" type="text/css">
</header>

<body>

    <?php
    if (isset ($_SESSION['userID'])) {
        $userIDlogin = $_SESSION['userID'];
    } else {
        $userIDlogin = '';
    }
    if (isset ($_SESSION['userPassword'])) {
        $userPasswordLogin = $_SESSION['userPassword'];
    } else {
        $userPasswordLogin = '';
    }
    if (isset ($_SESSION['loginsuccess'])) {
        $loginsuccess = $_SESSION['loginsuccess'];
    } else {
        $loginsuccess = '';
    }
    if (isset ($_POST['loginbtn'])) {
        $loginbtn = $_POST['loginbtn'];
    } else {
        $loginbtn = '';
    }
    ?>
    <br>
    <br>
    <br>
    <br>
    <div align=center>
        <!--This is for the user to input to login-->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <p>Please enter your username or email<input type=text name=userID value=""></p>
            <p>Please enter your password<input type=password name=userPassword value=""></p>
            <input type="submit" name="loginbtn" value="login">
        </form>
    </div>
    <?php
    if (isset($_POST['loginbtn'])) {
    
        $string_arg = $userPasswordLogin;
    
        md5($string_arg);
    
        $sql = "SELECT user_id, usertype FROM users WHERE $userIDLogin=user_id and $string_arg= password;";
        $result = result($sql);
    
        if ($result[1] == 's') {
            header("Location:./admin.php");
            $loginsuccess = true;
        } elseif ($result[1]=='c') {
            $loginsuccess = true;
            header("Location:./welcome.php");
        }
        elseif($result[1]=='d'){
            header("Location:./aup.php");
        }
    }
    ?>
    
</body>

</html>