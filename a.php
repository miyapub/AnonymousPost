<?
require "conn.php";
require "ip.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>
    <link rel="stylesheet" href="css/style.css?v=3.3">
    <body>
    

<?
require "n.php";
?>





<div class="box-outer top-box">
    <div class="box-inner">
        <div class="boxbar">
            <h2>[about]</h2>
        </div>
        <div class="boxcontent">
            <div class="stat-cell">
                <p></p>
            </div>
        </div>
    </div>
</div>



<?
$sql="select count(id) as count from posts";
$result = mysql_query($sql,$conn);
$rows = mysql_fetch_array($result);
$TotalPosts=$rows['count'];
?>
<div class="box-outer top-box" id="site-stats">
    <div class="box-inner">
        <div class="boxbar">
            <h2>Stats</h2>
        </div>
        <div class="boxcontent">
            <div class="stat-cell"><b>Total Posts:</b> <?=$TotalPosts?></div>
        </div>
    </div>
</div>




<?
require "f.php";
mysql_close();
?>
