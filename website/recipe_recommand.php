<?php 
  session_start();

  $link = mysqli_connect("oniddb.cws.oregonstate.edu","liaoi-db", "swtEVQHNOwq92oF7", "liaoi-db");
  if(!$link){
    echo "Cannot be connected!";
    exit;
  }

      //if($_POST["submit"]){
    // if($_GET){
        //$preferrence_1 = $_GET["preferrence1"];
        //$preferrence_2 = $_GET["preferrence2"];
        //$preferrence_3 = $_GET["preferrence3"];
        //$preferrence_4 = $_GET["preferrence4"];
        //$preferrence_5 = $_GET["preferrence5"];
        //$preferrence_6 = $_GET["preferrence6"];
        $user=$_SESSION['u_uid'];

        $query0 = "SELECT `user_uid`, `beef`, `pork`, `chicken`, `lamb`, `duck`, `fish`, `shrimp` FROM `login_library`  WHERE `user_uid` = '$user' ";
        $preferrence = mysqli_query($link, $query0);
        $pref = mysqli_fetch_array($preferrence, MYSQLI_NUM);
        $beef = $pref[1];
        $pork = $pref[2];
        $chicken = $pref[3];
        $lamb = $pref[4];
        $duck = $pref[5];
        $fish = $pref[6];
        $shrimp = $pref[7];
        $rows =array();
         //echo "beef:",$beef, "pork:",$pork,"chicken:",$chicken,"lamb:",$lamb,"duck:",$duck,"fish:",$fish,"shrimp:",$shrimp;

        if ($beef==1){
        $query1 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%beef%' LIMIT 0 , 30";
        $query2 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%beef%' LIMIT 0 , 30";
         $data1 = mysqli_query($link, $query1); 
         $data2 = mysqli_query($link, $query2);
         // $data19 = mysqli_fetch_fields($data1);
         while($row = mysqli_fetch_row($data1))
         {
         $rows[] = $row;
         }
         while($row = mysqli_fetch_row($data2))
         {
         $rows[] = $row;
         }
        // $beef_data = $query1 ." ". UNION ." ".$query2;
        //   $data19 = mysqli_query($link,$beef_data);
        //   echo mysqli_num_rows($data1), mysqli_num_rows($data2), mysqli_num_rows($data19);
        // mysqli_fetch_all($data1,MYSQLI_ASSOC);
        // mysqli_fetch_all($data2,MYSQLI_ASSOC);
        }
        if ($pork==1){
        $query3 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%pork%' LIMIT 0 , 30";
        $query4 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%pork%' LIMIT 0 , 30";
        $data3 = mysqli_query($link, $query3); 
        $data4 = mysqli_query($link, $query4);
         while($row = mysqli_fetch_row($data3))
         {
         $rows[] = $row;
         }
         while($row = mysqli_fetch_row($data4))
         {
         $rows[] = $row;
         }
        // mysqli_fetch_all($data3,MYSQLI_ASSOC);
        // mysqli_fetch_all($data4,MYSQLI_ASSOC);       
        }
        if ($chicken ==1){
        $query5 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%chicken%' LIMIT 0 , 30";
        $query6 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%chicken%' LIMIT 0 , 30";
        $data5 = mysqli_query($link, $query5); 
        $data6 = mysqli_query($link, $query6);
         while($row = mysqli_fetch_row($data5))
         {
         $rows[] = $row;
         }
         while($row = mysqli_fetch_row($data6))
         {
         $rows[] = $row;
         }
        // mysqli_fetch_all($data5,MYSQLI_ASSOC);
        // mysqli_fetch_all($data6,MYSQLI_ASSOC); 
        }
        if ($lamb==1){
        $query7 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%lamb%' LIMIT 0 , 30";
        $query8 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%lamb%' LIMIT 0 , 30";
        $data7 = mysqli_query($link, $query7); 
        $data8 = mysqli_query($link, $query8);
         while($row = mysqli_fetch_row($data7))
         {
         $rows[] = $row;
         }
         while($row = mysqli_fetch_row($data8))
         {
         $rows[] = $row;
         }
        // mysqli_fetch_all($data7,MYSQLI_ASSOC);
        // mysqli_fetch_all($data8,MYSQLI_ASSOC);
        }
        if ($duck==1){
        $query9 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%duck%' LIMIT 0 , 30";
        $query10 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%duck%' LIMIT 0 , 30";
        $data9 = mysqli_query($link, $query9); 
        $data10 = mysqli_query($link, $query10);
         while($row = mysqli_fetch_row($data9))
         {
         $rows[] = $row;
         }
         while($row = mysqli_fetch_row($data10))
         {
         $rows[] = $row;
         }
        // mysqli_fetch_all($data9,MYSQLI_ASSOC);
        // mysqli_fetch_all($data10,MYSQLI_ASSOC);
        }
        if ($fish ==1){
        $query11 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%fish%' LIMIT 0 , 30";
        $query12 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%fish%' LIMIT 0 , 30";
        $data11 = mysqli_query($link, $query11); 
        $data12 = mysqli_query($link, $query12);
         while($row = mysqli_fetch_row($data11))
         {
         $rows[] = $row;
         }
         while($row = mysqli_fetch_row($data12))
         {
         $rows[] = $row;
         }
        // mysqli_fetch_all($data11,MYSQLI_ASSOC);
        // mysqli_fetch_all($data12,MYSQLI_ASSOC);
        }
        if ($shrimp ==1){
        $query13 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_ar` WHERE `ingredients` LIKE '%shrimp%' LIMIT 0 , 30";
        $query14 = "SELECT `title`, `ingredients`, `instructions` FROM `recipe_fn` WHERE `ingredients` LIKE '%shrimp%' LIMIT 0 , 30";
        $data13 = mysqli_query($link, $query13); 
        $data14 = mysqli_query($link, $query14);
         while($row = mysqli_fetch_row($data13))
         {
         $rows[] = $row;
         }
         while($row = mysqli_fetch_row($data14))
         {
         $rows[] = $row;
         }
        // mysqli_fetch_all($data13,MYSQLI_ASSOC);
        // mysqli_fetch_all($data14,MYSQLI_ASSOC);
        }

       $count = count($rows);
       //echo $count;
// }

     if ($count == 0)
        {
            echo "Not found";
            // exit;
        }

//         //print_r(mysqli_num_rows($data1) == 0);
         // $result = array_merge($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12,$data13,$data14);
//         $max = mysqli_num_rows($result);
        $rs = $rows[rand(0,$count)];
        $recommand_name=$rs[0];
        $_SESSION['recommand-title'] = $rs[0];
        $_SESSION['recommand-ingre'] = $rs[1];
        $_SESSION['recommand-instruc'] = $rs[2];
        echo $recommand_name;
?>

    
