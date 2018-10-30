<?php
//Include the database configuration file
include 'database.php';
if(!empty($_POST["country_id"])){
    //Fetch all state data
    $query = mysqli_query($con,"SELECT * FROM `tbl_profile` WHERE `wt_id` = ".$_POST['country_id']."  ORDER BY `profile_nu` ASC");    
    //Count total number of rows
    $rowCount = mysqli_num_rows($query);    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select Profile</option>';
        while($row = mysqli_fetch_array($query)){ 
            echo '<option value="'.$row['id'].'">'.$row['profile_nu'].'</option>';
        }
    }else{
        echo '<option value="">Profile not available</option>';
    }
}
?>