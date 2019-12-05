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
<div align=center>
    <div id="image_map">
        <map name="durham_region_basic_map">
            <area href="./listing-search-results.php" alt="Brock" target="_blank" shape=poly coords="157,28, 162,21, 177,10, 211,128, 170,141, 150,74, 165,38">
            <area href="./listing-search-results.php" alt="Uxbridge" target="_blank" shape=poly coords="119,125, 161,112, 188,209, 148,225">
            <area href="./listing-search-results.php" alt="Scugog" target="_blank" shape=poly coords="170,140, 210,128, 223,145, 260,132, 277,183, 188,209">
            <area href="./listing-search-results.php" alt="Pickering" target="_blank" shape=poly coords="148,225, 188,209, 198,245, 180,250, 192,287, 170,296">
            <area href="./listing-search-results.php" alt="Ajax" target="_blank" shape=poly coords="180,250, 198,245, 210,279, 192,287">
            <area href="./listing-search-results.php" alt="Whitby" target="_blank" shape=poly coords="188,209, 211,204, 232,269, 210,279">
            <area href="./listing-search-results.php" alt="Oshawa" target="_blank" shape=poly coords="211,204, 233,197, 253,263, 232,269">
            <area href="./listing-search-results.php" alt="Clarington" target="_blank" shape=poly coords="234,197, 320,170, 344,247, 254,263">
        </map>
        <img src="./images/Durham_Map.jpg" alt="image map" width=396 height=304 usemap="#durham_region_basic_map">
    </div>
</div>