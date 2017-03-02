<?php
//customer_view.php - shows details of a single customer
?>
<?php include 'includes/config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:record_list.php');
}


$sql = "select * from DiscogsInventory where id = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $Artist = stripslashes($row['Artist']);
        $Title = stripslashes($row['Title']);
        $Label = stripslashes($row['Label']);
        $title = "Title Page for " . $Title;
        $pageID = $Artist;
//        $Labelsimp = strstr("$Label ", ", ", true);
        $Feedback = '';//no feedback necessary
    }    


    
}else{//inform there are no records
    $Feedback = '<p>This record does not exist in this database.</p>';
}

?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<p>';
    echo 'Artist: <b>' . $Artist . '</b><br> ';
    echo 'Title: <b>' . $Title . '</b><br> ';
    echo 'Label: <b>' . $Label . '</b><br> ';
    echo '<img id="record-pic" src="uploads/' . str_replace(" ", "", strtolower($Label)) . '.jpg" />';
    
    echo '</p>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="record_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'includes/footer.php';?>