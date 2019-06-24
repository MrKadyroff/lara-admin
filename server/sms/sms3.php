<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";
// $array = array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,text,plan,sms_status FROM plan WHERE plan= 3 ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        // echo "id: " . $row["id"]. " - plan: " . $row["plan"]. " " . $row["text"]." - date: " . $row["date"]. "<br>";
        while($row = mysqli_fetch_assoc($result)){
     $array[] = $row;}
}

} else {
    echo "0 results";
}
echo '<pre>';
list($end) = array_slice($array, -1);
print_r($end['text']);
$text =$end['text'];
echo '</pre>';
$id = $end['id'];
if ($end['sms_status']==1){
  echo "Новых сообщений нет";
}else{

header('Location : http://kazinfoteh.org:9507/api?action=sendmessage&username=demo&password=demo&recipient=77771234567&messagetype=SMS:TEXT&originator=INFO_KAZ&messagedata=$text');
$ins = "UPDATE plan SET  sms_status = 1 where id=$id ";
$result1 = $conn->query($ins);
$conn->close();}
 ?>
