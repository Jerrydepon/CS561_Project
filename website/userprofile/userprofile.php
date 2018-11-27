<?php
session_start();
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'liaoi-db';
$dbuser = 'liaoi-db';
$dbpass = 'swtEVQHNOwq92oF7';
$link = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (isset($_POST["submit"])) {
  // header("Location: ../indexmain.php");
  $id = $_SESSION['u_id'];
  $query = "SELECT * FROM `login_library`  WHERE `user_id` = '$id' ";
  $result = mysqli_query($link, $query);
  $pref = mysqli_fetch_array($result, MYSQLI_NUM);
  $oemail=$pref[3];

  // $pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
  // $email = mysqli_real_escape_string($link, $_POST["email"]);
  // if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  //   header("Location: signup.html?email=not_valid");
  //   exit();
  // }
  $username=$_POST["nuid"];
  if (!$username){
    $username=$pref[1];
  }
  $email=$_POST["nemail"];
  if (!$email){
    $email=$pref[3];
  }
  $beef=$_POST["beef"];
  $pork=$_POST["pork"];
  $chicken=$_POST["chicken"];
  $lamb=$_POST["lamb"];
  $duck=$_POST["duck"];
  $fish=$_POST["fish"];
  $shrimp=$_POST["shrimp"];
  // Error handlers
  // Check for empty fields
  $sql = "UPDATE `login_library` SET `user_uid`='$username' , `email`= '$email' , `beef`='$beef'|| '0',`pork`='$pork'|| '0',`chicken`='$chicken'|| '0',`lamb`='$lamb'|| '0',`duck`='$duck'|| '0',`fish`='$fish'|| '0',`shrimp`='$shrimp' || '0' WHERE `user_id`='$id'";
  $result=mysqli_query($link, $sql);
  if ($result) {
      // echo "Record updated successfully";
      // session_unset();
      $_SESSION['u_uid'] = $username;
      // session_destroy();
      header("Location: ../indexmain.php?update_success");
      exit();
  } else {
      echo "Error updating record: " . mysqli_error($conn);
  }
} else {
  header("Location: userprofile.php?updateprofile=error");
  exit();
}
?>