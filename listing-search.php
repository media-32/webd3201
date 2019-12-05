<?php
/*
File name:listing-search.php
Names: Aaron Styve, Hamza
group name: Group_02
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
    <?php

    //variable declaration
    $searchsuccess = true;
    $lowestPrice = $_POST['lowestPrice'];
    $highestPrice = $_POST['highestPrice'];
    $submit = $_POST['submit'];
    $city = $_POST['city[]'];
    $sql = $_SESSION['listingSearch'];
    $numberOfResults

    ?>

    <div align=center>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <h3>Lowest price<input type="text" name='lowestPrice' value="0"></h3>
            <h3>Highest price<input type="text" name='highestPrice' value="0"></h3>

            <!--This is for the check box -->
            <h3>Please check off the boxes you want to have in your home (optional)</h3>
            <h3>
                <table width=40%>
                    <tr>
                        <td>
                            Bathroom <input type=checkbox name='listingRequirements' value=2>
                        </td>
                        <td>
                            Kitchen <input type=checkbox name='listingRequirements' value=4>
                        </td>
                        <td>
                            Bedroom <input type=checkbox name='listingRequirements' value=8>
                        </td>
                        <td>
                            Garage <input type=checkbox name='listingRequirements' value=16>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Second floor<input type=checkbox name='listingRequirements' value=32>
                        </td>
                        <td>
                            gas heating<input type=checkbox name='listingRequirements' value=64>
                        </td>
                        <td>
                            electric heating<input type=checkbox name='listRequirements' value=128>
                        </td>
                        <td>
                            cold room<input type=checkbox name='listRequirements' value=256>
                        </td>
                    </tr>

                    <!--This is for the city-->
                    <tr>
                        <td align=center colspan="4">
                            <br>
                            <h3> Please select which city you want to buy from </h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Oshawa <input type=checkbox name=City[] value=1>
                        </td>
                        <td>
                            Clarington<input type=checkbox name=city[] value=2>
                        </td>
                        <td>
                            whitby<input type=checkbox name=city[] value=3>
                        </td>
                        <td>
                            Ajax<input type=checkbox name=city[] value=4>
                        </td>
                    </tr>

                    <tr align=center>
                        <td>
                            Scugog <input type=checkbox name=city[] value=5>
                        </td>
                        <td>
                            uxbridge<input type=checkbox name=city[] value=6>
                        </td>
                        <td>
                            brook <input type=checkbox name=city[] value=7>
                        </td>
                    </tr>

                    <!--This is the submit button to start finding listings -->
                    <tr>
                        <td colspan="4" align=center>
                            <br>
                            <input type=submit name="submit" value="Find listings">
                        </td>
                    </tr>
                </table>
            </h3>

            <!--This is for the submit button and the background work when submitting -->
            <?php
            if (isset($_POST['submit'])) {

                trim($lowestPrice);
                trim($highestPrice);

                /*This is to see if the lowest price and highest are actual numbers */
                if (is_numeric($highestPrice) == false) {
                    $searchsuccess = false;
                    echo "<br>" . "Please enter a numeric value for the highest price";
                }
                if (is_numeric($lowestPrice) == false) {
                    $searchsuccess = false;
                    echo "<br>" . "Please enter a numeric value for the lowest price";
                }

                if ($_POST['city[]'] == null) {
                    $searchsuccess = false;
                    echo "<br>" . "Please choose atleast one city";
                }

                if ($highestPrice <= $lowestPrice) {
                    $searchsuccess = false;
                    echo "<br> The higest price is bigger then lowest price";
                }

                if ($searchsuccess == true) {










                    $sql = ";";
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    $result = pg_num_rows(result($sql));
                    
                    if ($result < 1) {
                        header("Location:./lisiting-search-results.php");
                    }
                    if ($result==1){
                        header("Location:./listing-display.php");
                    }

                    if($result==0){
                        echo "There are no houses that have your requirements";
                    }

                }
            }
            ?>
        </form>
    </div>
</body>
<?php
?>

</hmtl>