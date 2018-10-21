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
  // $uid = $_POST["uid"];
  // $pwd = $_POST["pwd"];

  // Error handlers
  // Check for empty fields
  if (empty($uid) || empty($pwd)) {
    header("Location: signup.html?signup=empty");
    exit();
  } else {
    $sql = "SELECT * FROM `test_Jerry` WHERE `user_uid`='$uid'";
    $result = mysqli_query($link, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      header("Location: signup.html?signup=usertaken");
      exit();
    } else {
      // hashing passwordMeter
      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
      // insert the user into the database
      $sql = "INSERT INTO test_Jerry (user_uid, user_pwd) VALUES ('$uid', '$hashedPwd');";
      mysqli_query($link, $sql);
      header("Location: signup.html?signup=success");
      exit();
    }
  }

} else {
  header("Location: signup.html?QQ");
  exit();
}
