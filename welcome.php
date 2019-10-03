<?php
/*
File name:welcome.php
Names: Aaron Styve
group name:Group 2
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
<p>
Welcome to Vision Real Estate, we'll make your vision a reality. This website was created and designed by group02 from durham college as a deliverable the idea of this was to make it look like a real website

</p>
</body>

</html>