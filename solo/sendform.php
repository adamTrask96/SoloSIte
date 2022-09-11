<?php
//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['number']; // Берём данные из input c атрибутом name="phone"
$people = $_POST['people']; // Берём данные из input c атрибутом name="mail"
$message_com = $_POST['message_com'];
$room = $_POST['room'];

$token = "5524254722:AAFe7BIk78bfcN_wdKEPVvFg2M1nWmidEg4"; // Тут пишем токен
$chat_id = "-1001516241608"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "soloWay"; //Указываем название сайта

$arr = array(

  'Заказ с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Количество человек' => $people
  'Дополнительный комментарий' => $message_com
  'Зал' => $room
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>