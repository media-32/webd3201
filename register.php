<?php
/*
File name:register.php
group name:Group 2
Description: This page is for user who are registering
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

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php
    $userTypeRegister = $_SESSION['userType'];
    $userIDRegister = $_SESSION['userID'];
    $_SESSION['emailID'] = $userEmailRegister;
    $_SESSION['userPasword'] = $userPasswordRegister;
    $confirmPassword = $_POST['confirmPassword'];
    $submit = $_POST['submit'];
    $loginsuccess['loginsuccess'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $salutatations = $_POST['salutations'];
    $firstaddress = $_POST['firstaddress'];
    $secondaddress = $_POST['secondaddress'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postal = $_POST['postal'];
    $primaryphone = $_POST['primaryphone'];
    $secondphone = $_POST['secondphone'];
    $fax = $_POST['fax'];
    $preferedcontact = $_POST['preferedcontact'];

    ?>
    <div align="center">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <br>
            <select name="userType">
                <option value="none">Please choose a option...</option>
                <option value="AGENT">Agent</option>
                <option value="CLIENT">Client</option>
            </select>

            <!--This is for the user input-->
            <P>Please enter your first name</p><input type="text" name="firstname" value=""></p>
            <P>Please enter your last name</p><input type="text" name="lastname" value=""></p>
            <p>please enter your username<input type="text" name="userID" value=""></p>

            <p>Please enter your email <input type="email" name="emailID" value=""></p>

            <p>Please enter your password<input type="password" name="userPassword" value=""></p>

            <p>Please renter your password<input type="password" name="confirmPassword" value=""></p>
            <p>please the city you live in<input type="text" name="city" value=""></p>
            <select name="province">
                <option value="none">Please choose a option...</option>
                <option value="ON">Ontario</option>
                <option value="BC">British Colombia</option>
                <option value="SK">Saskachewan</option>
                <option value="MB">Manitoba</option>
                <option value="QC">Quebec</option>
                <option value="AB">Alberta </option>
                <option Value="NB">New Brunswick</option>
                <option value="PE">Prince Edward Island</option>
                <option value="NU">Nunuvat</option>
                <option value="YT">Yukon</option>
                <option value="NL">Newfoundland and Labrador</option>
            </select>
            <br>
            <br>
            <br>
            
            <p>Please enter your postal address<input type=input value="" name="postal">
            <p>Please enter your first phone number<input type=input value="" name=primarynumber></p>

            <p>(optional)Please enter your second number<input type=input value=""name=secondnumber></p>
            <p>Please enter your fax number <input type=input value="" name="fax"></p>
<br>
            <select name="preferedcontact">
                <option value="none">Please choose a option...</option>
                <option value="E">Email</option>
                <option value="P">Phone</option>
                <option value="F">Fax</option>
                <option letter="L">Letter</option>
            </select>

            <br>

            <input type="submit" value="Create account" name="submit">
        </form>

        <?php
        $string_arg = $userPassword;

        md5($string_arg);

        $sql;
        $sql = "SELECT user_id FROM users WHERE user_id=='$userID';";
        $registerResult = result($sql);
        $userCreate = true;

        if (isset($_POST['submit'])) {
            trim($userIDRegister);
            trim($userEmailRegister);
            trim($postal);
            trim($preferedcontact);
            trim($province);
            trim($firstaddress);
            trim($secondaddress);
            trim($firstname);
            trim($lastname);
            trim($fax);
            trim($city);
            

            if ($registerResult == true) {
                echo "This username is already in use please use a different one";
                $userCreate = false;
            }


            if ($userPasswordRegister == $confirmPassword) {
                $userCreate = true;
            } elseif ($userPasswordRegister != $confirmPassword) {
                $userCreate = false;
                echo "Passwords do not match please retry";
            }
            if ($userTypeRegister == "none") {
                echo "Please choose either Agent or Client";
                $userCreate = false;
            }

            if ($userCreate == true) {
                $date = date(o, j, n);
                $sql = "INSERT INTO users(user_id,password,usertype,email_address,enrol_date,last_Access) VALUES ('$userIDRegister','$string_arg','$userEmailRegister','$date','$date');";
                update_database($sql);
                header("Location:./welcome.php");
                $loginsuccess = true;
            }
        }
        ?>
</body>
</div>
<html>