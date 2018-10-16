<?php

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'liaoi-db';
$dbuser = 'liaoi-db';
$dbpass = 'swtEVQHNOwq92oF7';
$link = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
        $url = "http://web.engr.oregonstate.edu/~lujui/index.html"; 
        $account = $_POST["account"];
        $password = $_POST["password"];

        $query1 = "SELECT `account` FROM `534lo` WHERE `account` =  '$account' and `password` = '$password' LIMIT 0 , 30";


        $data1 = mysqli_query($link, $query1);

        if (mysqli_num_rows($data1)==1 )
        {

            header("Location: $url");
        }else{
            echo "404";
        }

$mysqli->close();

?>
