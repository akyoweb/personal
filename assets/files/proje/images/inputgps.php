<?php
require("database.php");

if(isset($_GET['gpsx'])){


$gpsx=$_GET['gpsx'];
$gpsy=$_GET['gpsy'];
$deviceid=$_GET['deviceid'];

$sql= mysqli_query($db , "
    
insert into device_log (device_id,gpsx,gpsy) values ('$deviceid','$gpsx','$gpsy')
" );

}







?>

<html>

<form method="get" action="inputgps.php">
<label> Device Id: </label>
<select name="deviceid">
<?php


$sql=mysqli_query($db,"
select * from devices;
");

while($row=mysqli_fetch_assoc($sql)){

echo '
<option value="'.$row['id'].'">
  '. $row['device_name'] .'
</option>  
';
}



?>

</select>
<br>

<label> GpsX: </label>
<input name="gpsx">
<br>
<label> GpsY: </label>
<input name="gpsy">
<br>
<button type="submit">Save!</button>



</form>

</html>