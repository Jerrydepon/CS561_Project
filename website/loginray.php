<?php

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'liaoi-db';
$dbuser = 'liaoi-db';
$dbpass = 'swtEVQHNOwq92oF7';
$link = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// echo 'hi';
    // if($_POST){
        // mysql_query("SET NAMES utf8");
        $url = "http://web.engr.oregonstate.edu/~lujui/index.html"; 

        $account = $_POST["account"];
        $password = $_POST["password"];

        //SELECT account FROM 534lO WHERE account =  'ASD' LIMIT 0 , 30
        // $query=" SELECT * FROM `534lo` WHERE `account` =  '$account' LIMIT 0 , 30 and `password` = `$password` LIMIT 0 , 30";
        $query1 = " SELECT `account` FROM `534lo` WHERE `account` =  '$account' LIMIT 0 , 30 ";
        $query2 = "SELECT `password` FROM `534lo` WHERE `password` = `$password` LIMIT 0 , 30 ";
        // $data = mysqli_query($link, $query);

        $data1 = mysqli_query($link, $query1);
        $data2 = mysqli_query($link, $query2);
        
        // $num = mysqli_num_rows($data);
        // echo "$num/n" ;
        if (mysqli_num_rows($data1)==0 and mysqli_num_rows($data2)==0)
        {
            echo "Not found";
        }else{
            echo 'success login';
            // sleep(1);
            // header("Location: $url");
            // exit;
        }

//         if ($num == 0){
//             // $_SESSION['username'] = $account;
//             echo = "Invalid Login Credentials.";

//         }else{
// //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
//             echo "Hi " . $account . "";
//             echo "This is the Members Area";
//         }       
        
//3.1.4 if the user is logged in Greets the user with message
//         if (isset($_SESSION['account'])){
//             $username = $_SESSION['account'];
//             echo "Hai " . $account . "";
//             echo "This is the Members Area";
// =        }
//3.2 When the user visits the page first time, simple login form will be displayed.
        // echo 'QQ/n';



        // if($data1 && $data2){
        //     echo 'success';
        // }
		// $result = mysql_query($mysqli, $query1) or die("Failed");
        // $row = @mysql_fetch_row($result);
        // if($row=mysqli_fetch_row($result))
        // {
        //     printf ("%s : %s",$row[0],$row[1]);
        //     echo "success";
        // }

        // if (mysqli_num_rows($data1) == 0 or mysqli_num_rows($data2)==0 )
        // {
        //     echo "unsuccess";
        //     exit;
        // }
        // $result1=mysqli_num_rows($data1)
        // $row = @mysql_fetch_row($result1);
        // if($row)
        // {
        //     echo "success";
        //     exit;
        // }

        // elseif ($query1['account']==$account && $query1['password']==$password) {
        // 	echo "Login success"
        // 	# code...
        // }
        // else{
        // 	echo "Failed to login"
        // }
        // $row=mysql_fetch_array($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
		// if($row['account'] == $account && $row['password'] == $password)
		// {
  //       //將帳號寫入session，方便驗證使用者身份
  //       // $_SESSION['account'] = $account;
  //       	echo '登入成功!';
		// }
		// else
		// {
  //  		     echo '登入失敗!';
		// }
$mysqli->close();
?>
