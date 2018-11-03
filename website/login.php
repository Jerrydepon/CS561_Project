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

if (isset($_POST['submit'])) {

  $uid = mysqli_real_escape_string($link, $_POST["uid"]);
  $pwd = mysqli_real_escape_string($link, $_POST["pwd"]);

  // Error handlers
  // Check for empty fields
  if (empty($uid) || empty($pwd)) {
    header("Location: signup.html?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM `login_library` WHERE `user_uid`='$uid'";
    $result = mysqli_query($link, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      header("location: index.php?login=Aerror");
      exit();
    } else {
        $_SESSION['u_id'] = $row['user_id'];
        $_SESSION['u_uid'] = $row['user_uid'];
        header("location: index2.html?$u_uid");
    }
  }
} else {
    header("location: index.php?login=Berror");
    exit();
}
