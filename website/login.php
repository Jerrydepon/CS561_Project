<?php
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'liaoi-db';
$dbuser = 'liaoi-db';
$dbpass = 'swtEVQHNOwq92oF7';
$link = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
        $url = "http://web.engr.oregonstate.edu/~lujui/index2.html"; 
        $account = $_POST["account"];
        $password = $_POST["password"];

        $query1 = "SELECT `account` FROM `534lo` WHERE `account` =  '$account' and `password` = '$password' LIMIT 0 , 30";


        $data1 = mysqli_query($link, $query1);

        if (mysqli_num_rows($data1)==1 )
        {

            header("Location: $url?$account");

        }else{
        	print '<center>Login error</center>';
        	echo '<center><a href="index.html">return to main page</a><br></center>';

        }

$mysqli->close();

?> 
<div id="errMsg">
    <?php if(!empty($aaa['errMsg'])) { echo $aaa['errMsg']; } ?>
</div>
<?php unset($aaa['errMsg']); ?>
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        $new_url = str_replace('login.php', 'index.html', $url);