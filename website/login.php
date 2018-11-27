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
    header("Location: login.html?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM `login_library` WHERE `user_uid`='$uid'";
    $result = mysqli_query($link, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      header("location: login.html?login=error");
      exit();
    } else {
        $query = "SELECT * FROM `login_library`  WHERE `user_uid` = '$uid' ";
        $result1 = mysqli_query($link, $query);
        $pref = mysqli_fetch_array($result, MYSQLI_NUM);
        $id=$pref[0];
        $_SESSION['u_uid'] = $uid;
        $_SESSION['u_id'] = $id;
        header("location: indexmain.php");
    }
  }
} else {
    header("location: login.html?login=error");
    exit();
}
