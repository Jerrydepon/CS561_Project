<?php 
  $link = mysqli_connect("oniddb.cws.oregonstate.edu","liaoi-db", "swtEVQHNOwq92oF7", "liaoi-db");
  if(!$link){
    echo "Cannot be connected!";
    exit;
  }

    //if($_POST["submit"]){
    if($_GET){
        $recipename = $_GET["recipename"];
        $query1 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `title` LIKE '%$recipename%' LIMIT 0 , 30";
        $query2 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `title` LIKE '%$recipename%' LIMIT 0 , 30";
       
        $data1 = mysqli_query($link, $query1); 
        $data2 = mysqli_query($link, $query2); 

        //print_r(mysqli_num_rows($data1) == 0);
        if (mysqli_num_rows($data1) == 0 && mysqli_num_rows($data2) == 0)
        {
            echo "Not found";
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
