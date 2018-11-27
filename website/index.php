<?php 
  $link = mysqli_connect("oniddb.cws.oregonstate.edu","liaoi-db", "swtEVQHNOwq92oF7", "liaoi-db");
  if(!$link){
    echo "Cannot be connected!";
    exit;
  }

    //if($_POST["submit"]){
    if($_GET){
        $RestaurantName = $_GET["RestaurantName"];
        $category = $_GET["category"];
        // echo $category;
        if($category == "All"){
            $query1 = "SELECT `Name`, `City`, `State`, `Country`, `Address`, `Total Review`, `dataset` FROM `Tripadvisor` WHERE `Name` LIKE '%$  RestaurantName%' OR `City` LIKE '%$RestaurantName%' OR `State` LIKE '%$RestaurantName%' LIMIT 0 , 30";
               $query2 = "SELECT `Restaurant Name`, `City`,`Country Code`,`Address`,`Aggregate rating`, `dataset`FROM `zomato` WHERE `Restaurant Name` Like '%$RestaurantName%' OR `City` LIKE '%$RestaurantName%' LIMIT 0 , 30";
               $query3 = "SELECT `store_name`, `store_city`, `store_state`, `store_address`, `store_stars`, `dataset` FROM `yelp_business` WHERE `store_name` LIKE '%$RestaurantName%' OR `store_city` LIKE '%$RestaurantName%' OR `store_state` LIKE '%$RestaurantName%' LIMIT 0 , 30";
        } else if($category == "Name"){
              $query1 = "SELECT `Name`, `City`, `State`, `Country`, `Address`, `Total Review`, `dataset` FROM `Tripadvisor` WHERE `Name` LIKE '%$  RestaurantName%' LIMIT 0 , 30";
               $query2 = "SELECT `Restaurant Name`, `City`,`Country Code`,`Address`,`Aggregate rating`, `dataset`FROM `zomato` WHERE `Restaurant Name` Like '%$RestaurantName%' LIMIT 0 , 30";
               $query3 = "SELECT `store_name`, `store_city`, `store_state`, `store_address`, `store_stars`, `dataset` FROM `yelp_business` WHERE `store_name` LIKE '%$RestaurantName%' LIMIT 0 , 30";
        }
        else if($category == "City"){
             $query1 = "SELECT `Name`, `City`, `State`, `Country`, `Address`, `Total Review`, `dataset` FROM `Tripadvisor` WHERE `City` LIKE '%$RestaurantName%' LIMIT 0 , 30";
             $query2 = "SELECT `Restaurant Name`, `City`,`Country Code`,`Address`,`Aggregate rating`, `dataset`FROM `zomato` WHERE `City` Like '%$RestaurantName%' LIMIT 0 , 30";
             $query3 = "SELECT `store_name`, `store_city`, `store_state`, `store_address`, `store_stars`, `dataset` FROM `yelp_business` WHERE `store_city` LIKE '%$RestaurantName%' LIMIT 0 , 30";
       }
     
     
        $data1 = mysqli_query($link, $query1); 
        $data2 = mysqli_query($link, $query2); 
        $data3 = mysqli_query($link, $query3); 
        // $data4 = mysqli_query($link, $query4);
        

        if (mysqli_num_rows($data1) == 0 && mysqli_num_rows($data2) == 0 && mysqli_num_rows($data3) == 0)
        {
            echo "Not found";
            echo  $category;
            exit;
        }
    }
    //}
?>
<table width="700" border="1" align="center">
   <tr>
    <td >Restaurant Name</td>
    <td >City</td>
    <td >State</td>
    <td >Country</td>
    <td >Address</td>
    <td >Rates</td>
    <td >Source</td>
  </tr>



<?php
  for($i=1;$i<=mysqli_num_rows($data1);$i++){
$rs=mysqli_fetch_row($data1);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
    <td><?php echo $rs[4]?></td>
    <td><?php echo $rs[5]?></td>
    <td><?php echo $rs[6]?></td>
  </tr>
  
<?php
}
?>

<?php
  for($i=1;$i<=mysqli_num_rows($data2);$i++){
$rs=mysqli_fetch_row($data2);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo " "?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
    <td><?php echo $rs[4]?></td>
    <td><?php echo $rs[5]?></td>
  </tr>
  
<?php
}
?>

<?php
  for($i=1;$i<=mysqli_num_rows($data3);$i++){
$rs=mysqli_fetch_row($data3);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo " "?></td>
    <td><?php echo $rs[3]?></td>
    <td><?php echo $rs[4]?></td>
    <td><?php echo $rs[5]?></td>
  </tr>
  
<?php
}
?>
