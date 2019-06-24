
<?php
//
// $date = $_POST['date'];
// echo $date."<br>";
// $date = strtotime($date)+864000;
// // echo $date."<br>";
// echo $end = date('Y-m-d',$date);
// // echo $end;''

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$sql = "SELECT * FROM messages  ";
global $conn;
$today = strtotime("today");
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "<br>";
    echo $date = $row['date'];
    echo "<br>WP =>".$row['sended'];
    echo "<br>TG =>".$row['tg_send'];
    echo "<br>FB =>".$row['fb_send'];
    echo "<br>SMS =>".$row['sms_send'];
  if ($today > $date){

  echo "<br>";
$date = strtotime($date)+864000;
echo "updated<br>";
echo $end = date('Y-m-d',$date)."<br>";}
else {
  echo "asd";
}

}
 ?>
