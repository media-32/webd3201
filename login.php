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
    $_SESSION['title'] = $title = "Main Page";
    require "header.php";
    include "footer.php";
    ?>
    <link href="./css style/webd3201.css" rel="stylesheet" type="text/css">
</header>

<body>

    <!--This is to for the main design of the website -->
    <table>
        <tr>
            <td height="200" ; width="100%" ; class="toppagedesign" ;>
                <h1 align="center">Welcome to Vision Realestate</h1>
            <td>
        </tr>
    </table>

</body>

</html>