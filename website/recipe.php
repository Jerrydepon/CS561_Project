<?php 
  $link = mysqli_connect("oniddb.cws.oregonstate.edu","liaoi-db", "swtEVQHNOwq92oF7", "liaoi-db");
  if(!$link){
    echo "Cannot be connected!";
    exit;
  }

    //if($_POST["submit"]){
    if($_GET){
        $recipename = $_GET["recipename"];
        $category = $_GET["category"];

        if($category == "All"){
          $query1 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `title` LIKE '%$recipename%' OR `ingredients` LIKE '%$recipename%' OR `instructions` LIKE '%$recipename%' LIMIT 0 , 30";
          $query2 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `title` LIKE '%$recipename%' OR `ingredients` LIKE '%$recipename%' OR `instructions` LIKE '%$recipename%'  LIMIT 0 , 30";
        }
        else if($category == "Title"){
          $query1 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `title` LIKE '%$recipename%' LIMIT 0 , 30";
          $query2 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `title` LIKE '%$recipename%' LIMIT 0 , 30";
        }
        else if($category == "Ingredients"){
          $query1 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%$recipename%' LIMIT 0 , 30";
          $query2 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%$recipename%' LIMIT 0 , 30";
       }
        else if($category == "Instructions"){
          $query1 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `instructions` LIKE '%$recipename%' LIMIT 0 , 30";
          $query2 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `instructions` LIKE '%$recipename%' LIMIT 0 , 30";
       }
        
        $data1 = mysqli_query($link, $query1);
        $data2 = mysqli_query($link, $query2);

        //print_r(mysqli_num_rows($data1) == 0);
        if (mysqli_num_rows($data1) == 0 && mysqli_num_rows($data2) == 0)
        {
            echo "Not found in ". $category;;
            exit;
        }
    }
    //}
?>
<table width="700" border="1" align="center">
   <tr>
    <td >Title</td>
    <td >Ingredients</td>
    <td >Instructions</td>
  </tr>




<?php
  for($i=1;$i<=mysqli_num_rows($data1);$i++){
$rs=mysqli_fetch_row($data1);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
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
    <td><?php echo $rs[2]?></td>
  </tr>
<?php
}
?>



<!-- <?php
  for($i=1;$i<=mysqli_num_rows($data4);$i++){
$rs=mysqli_fetch_row($data4);
$name1 = $rs[0];
$query5 = "SELECT `Name`, `City`, `State`, `Country`, `Address`, `Total Review`, `dataset` FROM `Tripadvisor` WHERE `Restaurant ID` = $name1";
$data5 = mysqli_query($link, $query5);
for($j=1;$j<=mysqli_num_rows($data5);$j++){
$rs1=mysqli_fetch_row($data5);
?>
  <tr>
    <td><?php echo $rs1[0]?></td>
    <td><?php echo $rs1[1]?></td>
    <td><?php echo $rs1[2]?></td>
    <td><?php echo $rs1[3]?></td>
    <td><?php echo $rs1[4]?></td>
    <td><?php echo $rs1[5]?></td>
    <td><?php echo $rs1[6]?></td>
  </tr>
<?php
}
$name2 = $rs[1];
$query6 = "SELECT `Restaurant Name`, `City`,`Country Code`,`Address`,`Aggregate rating`, `dataset` FROM `zomato` WHERE `Restaurant ID` = $name2";
$data6 = mysqli_query($link, $query6);
for($j=1;$j<=mysqli_num_rows($data6);$j++){
$rs2=mysqli_fetch_row($data6);
?>
  <tr>
    <td><?php echo $rs2[0]?></td>
    <td><?php echo $rs2[1]?></td>
    <td><?php echo ""?></td>
    <td><?php echo $rs2[2]?></td>
    <td><?php echo $rs2[3]?></td>
    <td><?php echo $rs2[4]?></td>
    <td><?php echo $rs2[5]?></td>
  </tr>
<?php
}
$name3 = $rs[2];
$query7 = "SELECT `store_name`, `store_city`, `store_state`, `store_address`, `store_stars`, `dataset` FROM `yelp_business` WHERE `Restaurant ID` = $name3";
$data7 = mysqli_query($link, $query7);
for($j=1;$j<=mysqli_num_rows($data7);$j++){
$rs3=mysqli_fetch_row($data7);
?>
  <tr>
    <td><?php echo $rs3[0]?></td>
    <td><?php echo $rs3[1]?></td>
    <td><?php echo $rs3[2]?></td>
    <td><?php echo ""?></td>
    <td><?php echo $rs3[3]?></td>
    <td><?php echo $rs3[4]?></td>
    <td><?php echo $rs3[5]?></td>
  </tr>
<?php
}
}
?> -->
