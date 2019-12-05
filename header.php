<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>
        <?php
        $title = $_SESSION['title'];
        echo $title;
        ?>
    </title>
    <link href="./css style/webd3201.css" rel="stylesheet" type="text/css">
</head>

<body class="backGroundDesign">
    <?php
    /*This is for the users entering */
    
    if (isset ($_SESSION['loginsuccess'])) {
        $loginsuccess = $_SESSION['loginsuccess'];
    } else {
        $loginsuccess = false;
    };
    if (isset ($_SESSION['userType'])) {
        $userTypeHeader = $_SESSION['userType'];
    } else {
        $userTypeHeader = '';
    };
    if (isset ($_SESSION['userID'])) {
        $userIDHeader = $_SESSION['userID'];
    } else {
        $userIDHeader = 0;
    }

    if (isset ($_SESSION['emailID'])) {
        $_SESSION['emailID'] = $userEmailHeader;
    } else {
        $userEmailHeader = '';
    }
    if (isset ($_SESSION['userPasword'])) {
        $_SESSION['userPasword'] = $userPasswordHeader;
    } else {
        $userPasswordHeader = '';
    }
    if(isset($_POST['LOGIN_COOKIE'])){
    $LOGIN_COOKIE = $_POST['LOGIN_COOKIE'];
    }
    else{
    /*This is for the cookies */
    $value = 'userID';
    $LOGIN_COOKIE = setcookie("TestCookie", $value, time() + 60 * 60 * 24 * 30);

    $value = 'emailID';
    $LOGIN_COOKIE = setcookie("TestCookie", $value, time() + 60 * 60 * 24 * 30);

    $value = 'userPassword';
    $LOGIN_COOKIE = setcookie("TestCookie", $value, time() + 60 * 60 * 24 * 30);
    
    }
    ?>

    <div>
        <!--This is to for the main design of the website -->
        <table class="topDesign" width="100%">
            <tr>

                <td width="70%">
                    <img src="./images/Vision Logo.jpg">
                </td>

                <td width=25%>
                    <img src="./images/durham college logo.jpg">
                </td>

                <td>

                    <?php
                    if ($loginsuccess == false) {
                        ?>
                        <div class="dropdown">
                            <button class="dropbtn"><img src="./images/login logo.jpg"></button>
                            <div class="dropdown-content">
                                <a href="./login.php">login</a>
                                <a href="./register.php">Register</a>
                            </div>
                        </div>
                    <?php
                    } elseif ($loginsuccess == true) {
                        ?>
                        <div class="dropdown">
                            <button class="dropbtn"><img src="./images/login logo.jpg"></button>
                            <div class="dropdown-content">
                                <a href="./logout.php">logout</a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <!--This is for the navigation bar -->
    <div class="menu">
        <div class="dropdown">
            <button class="dropbtn">Main</button>
            <div class="dropdown-content">
                <a href="./index.php">Main Page</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Welcome</button>
            <div class="dropdown-content">
                <a href="./welcome.php">Welcome Page</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Search</button>
            <div class="dropdown-content">
                <a href="./listing-city-select.php">search by city</a>
                <a href="./listing-search.php">search by detail</a>
            </div>
        </div>


    </div>
</body>

</html>