<?php 
  $link = mysqli_connect("oniddb.cws.oregonstate.edu","liaoi-db", "swtEVQHNOwq92oF7", "liaoi-db");
  if(!$link){
    echo "Cannot be connected!";
    exit;
  }

      //if($_POST["submit"]){
    if($_GET){
        //$preferrence_1 = $_GET["preferrence1"];
        //$preferrence_2 = $_GET["preferrence2"];
        //$preferrence_3 = $_GET["preferrence3"];
        //$preferrence_4 = $_GET["preferrence4"];
        //$preferrence_5 = $_GET["preferrence5"];
        //$preferrence_6 = $_GET["preferrence6"];

        $preferrence_1 = "water";
        $preferrence_2 = "salt";
        $preferrence_3 = "flour";
        $preferrence_4 = "oil";
        $preferrence_5 = "peper";
        $preferrence_6 = "";


        $query1 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%$preferrence1%' LIMIT 0 , 30";
        $query2 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%$preferrence2%' LIMIT 0 , 30";
        $query3 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%$preferrence3%' LIMIT 0 , 30";
        $query4 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%$preferrence4%' LIMIT 0 , 30";
        $query5 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%$preferrence5%' LIMIT 0 , 30";
        $query6 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%$preferrence6%' LIMIT 0 , 30";

        $query7 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%$preferrence1%' LIMIT 0 , 30";
        $query8 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%$preferrence2%' LIMIT 0 , 30";
        $query9 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%$preferrence3%' LIMIT 0 , 30";
        $query10 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%$preferrence4%' LIMIT 0 , 30";
        $query11 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%$preferrence5%' LIMIT 0 , 30";
        $query12 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%$preferrence6%' LIMIT 0 , 30";

        if (mysqli_num_rows($data1) == 0 && mysqli_num_rows($data2) == 0 && mysqli_num_rows($data3) == 0 && mysqli_num_rows($data4) == 0 && mysqli_num_rows($data5) == 0 && mysqli_num_rows($data6) == 0 && mysqli_num_rows($data7) == 0 && mysqli_num_rows($data8) == 0 && mysqli_num_rows($data9) == 0 && mysqli_num_rows($data10) == 0 && mysqli_num_rows($data11) == 0 && mysqli_num_rows($data12) == 0)
        {
            echo "Not found";
            exit;
        }


        $data1 = mysqli_query($link, $query1); 
        $data2 = mysqli_query($link, $query2);
        $data3 = mysqli_query($link, $query3); 
        $data4 = mysqli_query($link, $query4);       
        $data5 = mysqli_query($link, $query5); 
        $data6 = mysqli_query($link, $query6);         
        $data7 = mysqli_query($link, $query7); 
        $data8 = mysqli_query($link, $query8);
        $data9 = mysqli_query($link, $query9); 
        $data10 = mysqli_query($link, $query10);
        $data11 = mysqli_query($link, $query11); 
        $data12 = mysqli_query($link, $query12);
        //print_r(mysqli_num_rows($data1) == 0);
        $result = array_merge($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12)
        $max = mysqli_num_rows($result);
?>

<table width="700" border="1" align="center">
   <tr>
    <td >Title</td>
    <td >Ingredients</td>
    <td >Instructions</td>
  </tr>


  <?php
 $rs=mysqli_fetch_array($data1, rand(0,$max));
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
  </tr>

   $recommand_name=$rs[0];
