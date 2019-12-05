<?php
/*
File name:listing-search-results.php
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

$pages=$_GET['pages'];
$_SESSION['selectedListing'] = $_GET['listing_id'];
	
	$sql = "SELECT *
			FROM listings
			WHERE id='listing_id'";
	$result = result($sql);//using result function from db.php
	?>
	<img src="./images/No_picture_available.png" alt="No_picture_available"> 
	<?php
	//generate the table	
		$output .= "\n\t<tr>\n\t\t<th>City</th>\n\t\t<td>".pg_fetch_result($result, "city")."</td>\n\t</tr>"; 
		$output .= "\n\t<tr>\n\t\t<th>Bedrooms</th>\n\t\t<td>".pg_fetch_result($result, "bedrooms")."</td>\n\t</tr>"; 
		$output .= "\n\t<tr>\n\t\t<th>Type</th>\n\t\t<td>".pg_fetch_result($result, "property_type")."</td>\n\t</tr>";
		$output .= "\n\t<tr>\n\t\t<th>Price</th>\n\t\t<td>".pg_fetch_result($result, "price")."</td>\n\t</tr>\n\t</tr>";
		$output .= "\n\t<tr>\n\t\t<th>Status</th>\n\t\t<td>".pg_fetch_result($result, "listing_status")."</td>\n\t</tr>"; 

	echo $output; //display the output
?>

    <div align=center>
        <div class="pagination">
            <a href="">&laquo;</a>
            <a href="">&lsaquo;</a> 
            <a href="">&rsaquo;</a>
            <a href="">&raquo;</a>
        </div>
    </div>
</body>

</html>