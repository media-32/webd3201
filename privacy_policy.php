<?php
/*
file name:privacy_policy.php
name: group_02
description: this is for showing the privacy policy
*/
?>

<html>

<header>
    <?php

    /*This is to include the php files header and footer as well as pass a title variable*/
    $_SESSION['title'] = $title = "Vision Real Estate";
    require "header.php";
    include "constants.php";
    include "functions.php";
    ?>
    <link href="./css style/webd3201.css" rel="stylesheet" type="text/css">
</header>

<body>
    <h2>When you use our services you're trusting us with your information. We understand this is a big responsibility and work hard to protect your information and put you in control </h2>
    <br />
    <h3>We want you to understand the types of information we collect as you use our services</h3>
    <p>We collect information from our customers to provide the best service. The information we collect is you housing information, your email so you can receive any emails that may be important to you</p>

    <br />
    <h3>For legal reasons</h3>
    <p>we will share personal information outside of Vision Realestate if we have good-faith belief that access,use, preservation, or disclosure of the information is reasonably necessary to
        <br />
        -Meet any applicable law, requlation, legal process, or enforeable goverment request.
        <br />
        -Detect, prevebt or otherwise adress fraud, security, or technical issues
        <br />
        -Protect against harm of the rights, propery or safety of Vision RealEstate, our users or the plubic as required or permitted by locale_get_keywords
        <br />We will not share information with other companys or goverment officials if there is no violation of the law or our terms and services
    </p>

    <p>If Vision RealEstate is involved in a merger, acquisition, or sale of assets, we’ll continue to ensure the confidentiality of your personal information and give affected users notice before personal information is transferred or becomes subject to a different privacy policy</p>

    <br />
    <h3>we build security into our services to protect your information</h3>
    <p> -we use encryption to keep your data private while in transit
        <br />
        -we review our information collection, storage amd processing practices, including physical security measures, to prevent unauthorized access to our systems
    </p>

    <h1> our terms and services</h1>
    <br />
    <h2>If deciding to use our services you are complying with</h2>
    <p>
        <br/>
        -No illegal activity using our services
        <br/>
        -no pornographic or inappropiate images
        <br/> 
        inappropiate images may be in the form of nudity, violence, gruesome. We can also decide if an image that do not fit within these groups may be deemed inappropiate
    </p>

</body>

</html>