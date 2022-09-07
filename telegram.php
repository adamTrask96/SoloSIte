<?php

/* https://api.telegram.org/bot5524254722:AAFe7BIk78bfcN_wdKEPVvFg2M1nWmidEg4/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['number'];
$people = $_POST['people'];
$message = $_POST['message']
$room = $_POST['room']
$token = "5524254722:AAFe7BIk78bfcN_wdKEPVvFg2M1nWmidEg4";
$chat_id = "-679992343";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Кол-ство' => $people,
  'Доп. коммент' => $message,
  'Зал' => $room
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>