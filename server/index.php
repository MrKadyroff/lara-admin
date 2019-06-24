<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $conn->set_charset('utf8');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $tel = "";
    $text= "";
    $id = "";

/**
 *
 */

//////////////////////////////////Date_changer//////////////////////////////////

function date(){
     $sql = "SELECT * FROM messages WHERE plan=1 and sended=1 limit 1 ";
     global $conn;
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()){
       echo $row['date'];
     }
$date = $_POST['date'];
echo $date."<br>";
$date = strtotime($date)+864000;
// echo $date."<br>";
echo $end = date('Y-m-d',$date);
}


//////////////////////////////////Date-end///////////////////////////////////////

///////////////////////////////WHATSAPP-START//////////////////////////////////////////

//////////////////////////////////////////mes1-start///////////////////////////////////////////

 function mes1(){
   $sql2  = "SELECT * FROM categories where wp=1 and type = 1 ";
   $sql = "SELECT * FROM messages WHERE plan=1 and sended=0 limit 1 ";
   global $conn,$text,$tel,$id;
   $result = $conn->query($sql);
   $result2 = $conn->query($sql2);
   while ($row = $result->fetch_assoc()) {
echo "<br> Сообщение : ".$text = $row['message'];
$id = $row['id'];
echo "<br> Дата : ".$date = $row['date'];
$today = strtotime("today");
$date  = strtotime($date);
if ($today != $date){
  echo "  Дата не совпадает";
}else if($today=$date) {
  wp_send1($tel,$text,$id);
}
   }

   while ($row2 = $result2->fetch_assoc()) {
echo "<br>";
$tel = $row2['tel'];
echo "Номер : ".$tel;

}
  }



mes1();
///////////////////////////////////////mes1-end///////////////////////////////////////////

echo "<br>---------------------------------------------";
//////////////////////////////////////mes2-start////////////////////////////////////////

function mes2(){
  $sql2  = "SELECT * FROM categories where wp=1 and type = 2";
  $sql = "SELECT * FROM messages WHERE plan=2 limit 1 ";
global $conn,$text,$tel,$id;
  $result = $conn->query($sql);
  $result2 = $conn->query($sql2);
  while ($row = $result->fetch_assoc()) {
// print_r($row['message']);
echo "<br>Сообщение: ".$text = $row['message'];

echo "<br>Дата : ".$date = $row['date'];
$today = strtotime("today");
$date  = strtotime($date);
if ($today != $date){
  echo "  => Дата не совпадает";
}else if($today=$date) {
  wp_send1($tel,$text,$id);
}
  }

  while ($row2 = $result2->fetch_assoc()) {
// print_r($row2['tel']);
echo "<br>";
$tel = $row2['tel'];
echo "Номер : ".$tel;
      // echo $tel = $row['tel'];echo "  ";

  }
 }


mes2();

///////////////////////////////mes-2 end/////////////////////////////////////////////

echo "<br>---------------------------------------------";
////////////////////////////////mes-3 -start////////////////////////////////
function mes3(){
  $sql2  = "SELECT * FROM categories where wp=1 and type = 3";
  $sql = "SELECT * FROM messages WHERE plan=3 limit 1 ";
global $conn,$text,$tel,$id;
  $result = $conn->query($sql);
  $result2 = $conn->query($sql2);
  while ($row = $result->fetch_assoc()) {
// print_r($row['message']);

echo "<br>Сообщение: ".$text = $row['message'];

echo "<br>Дата : ".$date = $row['date'];
$today = strtotime("today");
$date  = strtotime($date);
if ($today != $date){
  echo "  => Дата не совпадает";
}else if($today=$date) {
  wp_send1($tel,$text,$id);
}
  }

  while ($row2 = $result2->fetch_assoc()) {
// print_r($row2['tel']);
echo "<br>";
$tel = $row2['tel'];
echo "Номер : ".$tel;
      // echo $tel = $row['tel'];echo "  ";

  }
 }


mes3();
/////////////////////////////////MES 3 END ////////////////////////
echo "<br>---------------------------------------------";
////////////////////////////////mes-4 -start////////////////////////////////
function mes4(){
  $sql2  = "SELECT * FROM categories where wp=1 and type = 4";
  $sql = "SELECT * FROM messages WHERE plan=4 limit 1 ";
global $conn,$text,$tel,$id;
  $result = $conn->query($sql);
  $result2 = $conn->query($sql2);
  while ($row = $result->fetch_assoc()) {
// print_r($row['message']);
echo "<br>Сообщение: ".$text = $row['message'];

echo "<br>Дата : ".$date = $row['date'];
$today = strtotime("today");
$date  = strtotime($date);
if ($today != $date){
  echo "  => Дата не совпадает";
}else if($today=$date) {
  wp_send1($tel,$text,$id);
}
  }

  while ($row2 = $result2->fetch_assoc()) {
// print_r($row2['tel']);
echo "<br>";
$tel = $row2['tel'];
echo "Номер : ".$tel."<br>";
      // echo $tel = $row['tel'];echo "  ";

  }
 }


mes4();
/////////////////////////////////MES 3 END ////////////////////////
echo "<br>-----------------------------------------------";
/////////////////////////////////SEND-MES-SCRIPT////////////////////////////
function wp_send1($tel,$text,$id){
  global $conn;
$data = [

    'phone' => $tel, // Телефон получателя
    'body' => $text, // Сообщение
];
$json = json_encode($data); // Закодируем данные в JSON
// URL для запроса POST /message
$url = 'https://eu36.chat-api.com/instance47494/message?token=kk4fkovpx6z7k01e';
// Сформируем контекст обычного POST-запроса
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Отправим запрос
$result = file_get_contents($url, false, $options);
$sended = "UPDATE messages SET sended = 1 where id=$id ";
$conn->query($sended);
}
/////////////////////////WP-SEND-END/////////////////////////////////////////////

/////////////////////////TELEGRAM-SCRIPT-PLAN-1//////////////////////////////

function tg_msg1(){
  global $conn;
$tg_mes1 = "SELECT * FROM messages where  tg_send=0 and plan=1 limit 1";
$res_tg = $conn->query($tg_mes1);
$text = "";
$id="";

if ($res_tg->num_rows > 0) {
    // output data of each row
    while($row_tg = $res_tg->fetch_assoc()) {

// print_r($row_tg);
$id=$row_tg['id'];
echo "<br> Сообщение: ".$text = $row_tg['message'];
echo "<br> Дата : ".$date = $row_tg['date'];
$today = strtotime("today");
$date  = strtotime($date);
if ($today != $date){
  echo "   => Дата не совпадает";
}else if($today=$date) {
  tg_send($text,$id);


}

}
}
}

function tg_send($text,$id){
  global $conn;
$apiToken="839953365:AAHwjVqx_1gAo4w8wKAStT32ltmgwoiibmE";


$post = [
      'chat_id' => '@risk_expert',
      'text' =>  $text,

  ];
  var_dump($post);
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL,"https://api.telegram.org/bot".$apiToken."/sendMessage?");
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
// execute!
$response = curl_exec($curl);
if (curl_error($curl)) {
  $error_msg = curl_error($curl);
  echo $error_msg;
}
// close the connection, release resources used
curl_close($curl);
var_dump($response);
$tg_send = "UPDATE messages SET  tg_send = 1 where id=$id ";
$conn->query($tg_send);
}

tg_msg1($conn);

//////////////////////////////////////////TELEGA -END/////////////////////////////



/////////////////////////TELEGRAM-SCRIPT-PLAN-2//////////////////////////////


function tg_msg2(){
  global $conn;
$tg_mes1 = "SELECT * FROM messages where tg_send=0 and plan=2 limit 1";
$res_tg = $conn->query($tg_mes1);
$text = "";
$id="";

if ($res_tg->num_rows > 0) {
    // output data of each row
    while($row_tg = $res_tg->fetch_assoc()) {

// print_r($row_tg);
$id=$row_tg['id'];
echo "<br>--------------------------------------------------<br>";
echo "<br> Сообщение: ".$text = $row_tg['message'];
echo "<br> Дата : ".$date = $row_tg['date'];
$today = strtotime("today");
$date  = strtotime($date);
if ($today != $date){
  echo "   =>Дата не совпадает";
  echo "<br>-------------------------------------------------<br>";
}else if($today=$date) {
  tg_send_sec($text,$id);

}

}
}
}

function tg_send_sec($text,$id){
  global $conn;
$apiToken="839953365:AAHwjVqx_1gAo4w8wKAStT32ltmgwoiibmE";


$post = [
      'chat_id' => '@risk_expert2',
      'text' =>  $text,

  ];
  var_dump($post);
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL,"https://api.telegram.org/bot".$apiToken."/sendMessage?");
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
// execute!
$response = curl_exec($curl);
if (curl_error($curl)) {
  $error_msg = curl_error($curl);
  echo $error_msg;
}
// close the connection, release resources used
curl_close($curl);
var_dump($response);
$tg_send = "UPDATE messages SET  tg_send = 1 where id=$id ";
$conn->query($tg_send);
}
tg_msg2($conn);

//////////////////////////////////////////TELEGA -END/////////////////////////////

//////////////////////////////////////////TELEGRAM 3 MES /////////////////////////
function tg_msg3(){
  global $conn;
$tg_mes1 = "SELECT * FROM messages where tg_send=0 and plan=3 limit 1";
$res_tg = $conn->query($tg_mes1);
$text = "";
$id="";

if ($res_tg->num_rows > 0) {
    // output data of each row
    while($row_tg = $res_tg->fetch_assoc()) {
$id=$row_tg['id'];
// print_r($row_tg);
echo "<br>--------------------------------------------------<br>";
echo "<br> Сообщение: ".$text = $row_tg['message'];
echo "<br> Дата : ".$date = $row_tg['date'];
$today = strtotime("today");
$date  = strtotime($date);
if ($today != $date){
  echo "   =>Дата не совпадает";
  echo "<br>-------------------------------------------------<br>";
}else if($today=$date) {
  tg_send_third($text,$id);
}
}
}
}

function tg_send_third($text,$id){
  global $conn;
$apiToken="839953365:AAHwjVqx_1gAo4w8wKAStT32ltmgwoiibmE";


$post = [
      'chat_id' => '@risk_expert3',
      'text' =>  $text,

  ];
  var_dump($post);
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL,"https://api.telegram.org/bot".$apiToken."/sendMessage?");
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
// execute!
$response = curl_exec($curl);
if (curl_error($curl)) {
  $error_msg = curl_error($curl);
  echo $error_msg;
}
// close the connection, release resources used
curl_close($curl);
var_dump($response);
$tg_send = "UPDATE messages SET  tg_send = 1 where id=$id ";
$conn->query($tg_send);
}
tg_msg3($conn);
//////////////////////////////////////////TG END///////////////////////////////////////


///////////////////////////////////////TELEGRAM 4 MES //////////////////////////////////
function tg_msg4(){
  global $conn;
$tg_mes1 = "SELECT * FROM messages where tg_send=0 and plan=4 limit 1";
$res_tg = $conn->query($tg_mes1);
$text = "";
$id="";

if ($res_tg->num_rows > 0) {
    // output data of each row
    while($row_tg = $res_tg->fetch_assoc()) {
$id=$row_tg['id'];
// print_r($row_tg);
echo "<br>--------------------------------------------------<br>";
echo "<br> Сообщение: ".$text = $row_tg['message'];
echo "<br> Дата : ".$date = $row_tg['date'];
$today = strtotime("today");
$date  = strtotime($date);
if ($today != $date){
  echo "   =>Дата не совпадает";
  echo "<br>-------------------------------------------------<br>";
}else if($today=$date) {
  tg_send_four($text,$id);
}
}
}
}

function tg_send_four($text,$id){
  global $conn;
$apiToken="839953365:AAHwjVqx_1gAo4w8wKAStT32ltmgwoiibmE";


$post = [
      'chat_id' => '@risk_expert_4',
      'text' =>  $text,

  ];
  var_dump($post);
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL,"https://api.telegram.org/bot".$apiToken."/sendMessage?");
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
// execute!
$response = curl_exec($curl);
if (curl_error($curl)) {
  $error_msg = curl_error($curl);
  echo $error_msg;
}
// close the connection, release resources used
curl_close($curl);
var_dump($response);
$tg_send = "UPDATE messages SET  tg_send = 1 where id=$id ";
$conn->query($tg_send);
}
tg_msg4($conn);

///////////////////////////////////////////TELEGA MES END ///////////////////////////////////////


//////////////////////////////////////////////SMS 1 /////////////////////////////////////////////

 ?>
