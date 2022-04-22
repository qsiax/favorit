<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$token = "5226728797:AAHMPwZuogFvXG6DDsndvkhKUwaZ1jpnUzI";
$chat_id = "-613504786";
$arr = array(
  'Имя пользователя:' => $name,
  'Телефон:' => $phone,
  'Email:' => $email,
  'Сообщение:' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>