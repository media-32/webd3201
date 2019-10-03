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

    <table width="100%" class="mainPageTableDesign">
        <tr>
            <td width="50%" align="center">
                <br>
                <br>
                <br>
                <br>
                Welcome to Vision Real Estate
                <br>
                <br>
                "we'll make your vision a reality"
            </td>
            <td width="50%" align="center" class="middleBorder">
                <br>
                <br>
                <br>
                <br>
                <br>
                Please Enter a provinces name
                <br>
                <form>
                    <input class="searchBar" type=text name=search value="">
                </form>
                /*Still working on it*/
            </td>
        <tr>
    </table>

</body>

</html>