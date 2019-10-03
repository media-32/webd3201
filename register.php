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

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php
    $_SESSION['userType']=$userType;
    $_SESSION['userID'] = $userID;
    $_SESSION['emailID'] = $userEmail;
    $_SESSION['userPasword'] = $userPassword;
    $confirmPassword = $_POST['confirmPassword'];
    $radioButton = $_SESSION['radiobtn'];
    $submit = $_POST['submit'];
    ?>
    <div align="center">
        <form method="POST" action="<?php echo htmlspecialchars($_SREVER["PHP_SELF"]); ?>">

            <br>
            <select name="userType">
                <option value="none">Please choose a option...</option>
                <option value="AGENT">Agent</option>
                <option value="CLIENT">Client</option>
            </select>

            <!--This is for the user input-->
            <p>please enter your username<input type="text" name="userID" value=""></p>

            <p>Please enter your email <input type="email" name="emailID" value=""></p>

            <p>Please enter your password<input type="password" name="userPassword" value=""></p>

            <p>Please renter your password<input type="password" name="confirmPassword" value=""></p>

            <p>would you like to save your information?
                <br>
                Yes<input type="radio" name=radiobtn value="yes">
                <br>
                No<input type="radio" name=radiobtn value="no" checked>

            </p>

            <input type="submit" value="Create account" name="submit">
        </form>

        <?php
        $userCreate = true;

        if (isset($_POST['submit'])) {
            trim($userID);
            trim($userEmail);

            if ($userPassword == $confirmPassword) {
                $userCreate = true;
            } elseif ($userPassword != $confirmPassword) { 
                $userCreate=false;
                echo "Passwords do not match please retry";
            }
if ($userType=="none"){
    echo "Please choose either Agent or Client";
    $userCreate=false;
}

if($userCreate==true){
    $date=date(o,j,n);
    $sql=$_SESSION['sql'];
    $sql="INSERT INTO users(user_id,password,usertype,email_address,enrol_date,last_Access) VALUES ('$userID','$userPassword','$userEmail','$date','$date');";

}
        
        }
        ?>
</body>
</div>

</html>