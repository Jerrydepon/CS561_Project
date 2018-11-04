<?php

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'liaoi-db';
$dbuser = 'liaoi-db';
$dbpass = 'swtEVQHNOwq92oF7';
$link = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (isset($_POST["submit"])) {

  $uid = mysqli_real_escape_string($link, $_POST["uid"]);
  $pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
  $email = mysqli_real_escape_string($link, $_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: signup.html?email=not_valid");
    exit();
  }
  $beef=$_POST["beef"];
  $pork=$_POST["pork"];
  $chicken=$_POST["chicken"];
  $lamb=$_POST["lamb"];
  $duck=$_POST["duck"];
  $fish=$_POST["fish"];
  $shrimp=$_POST["shrimp"];
  $kindarry=($_POST["beef"] || '0');
  // $newvalue=implode(",",$kindarry);
  // $uid = $_POST["uid"];
  // $pwd = $_POST["pwd"];
  $successsignup=0;
  // Error handlers
  // Check for empty fields
  if (empty($uid) || empty($pwd)) {
    header("Location: signup.html?signup=empty");
    exit();
  } else {
    $sql = "SELECT * FROM `login_library` WHERE `user_uid`='$uid'";
    $result = mysqli_query($link, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      header("Location: signup.html?signup=usertaken");
      exit();
    } else {
      // hashing passwordMeter
      // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
      // insert the user into the database
      // $sql = "INSERT INTO login_library (user_uid, user_pwd, email, beef, pork) VALUES ('$uid', '$pwd', '$email','$beef','$pork');";
      $sql = "INSERT INTO login_library (user_uid, user_pwd, email, beef,pork,chicken,lamb,duck,fish,shrimp) VALUES ('$uid', '$pwd', '$email','$beef','$pork','$chicken','$lamb','$duck','$fish','$shrimp');";
      mysqli_query($link, $sql);
      header("Location: login.html?successsignup=1");
      exit();
    }
  }

} else {
  header("Location: signup.html?signup=error");
  exit();
}
