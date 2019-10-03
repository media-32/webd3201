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

    <div>
        <!--This is to for the main design of the website -->
        <table class="topDesign" width="100%">
            <tr>

                <td width="70%">
                    <img src="./images/Vision logo.jpg">
                </td>
                
                <td width=25%>
                    <img src="./images/durham college logo.jpg">
                </td>
                
                <td>
                    <div class="dropdown">
                        <button class="dropbtn"><img src="./images/login logo.jpg"></button>
                        <div class="dropdown-content">
                            <a href="./login.php">login</a>
                            <a href="./register.php">Register</a>
                        </div>
                    </div>

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

    </div>
</body>

</html>