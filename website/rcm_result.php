<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Recipe for your recommendation!! </title>
    <style>
        table {
            width:80%;
            background-color:#FFFFFF;
            margin-top:70px;
            border-collapse: collapse;
            }

        table, th, td {
            border: 1px solid black;
        }
        body {
            background: url(recipe_result.jpg);
            background-size: cover;
            text-align:center;
        }
        .results{
            margin:0 auto;
            height:30%;
            margin-left: 20%;
            font-size: 15px;
        }
        h1{
            margin-top: 20%;
        }
</style>
</head>
<body>
    <h1><?php echo $_SESSION['recommand-title'];?>
    <div name="results" class="results">
        <table>
        <tr>
            <th>Ingredients</th> 
            <th>Instructions</th>
        </tr>
        <tr>
            <td><?php echo $_SESSION['recommand-ingre'];?></td> 
            <td><?php echo $_SESSION['recommand-instruc'];?></td>
        </tr>
        </table>
    </div>
</body>
</html>