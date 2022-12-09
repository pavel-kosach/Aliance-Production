<?php   
  
$user_name = htmlspecialchars($_POST["username"]);  
$user_phone = htmlspecialchars($_POST["userphone"]); 
$user_email = htmlspecialchars($_POST["usermail"]); 
$user_message = htmlspecialchars($_POST["usermessage"]);  

$token = "5868694558:AAFr5HLisKdQcghQG_OU4YTPTocKQOOmU20";
$chat_id = "-825125081";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone,
  "E-mail: " => $user_email,
  "Сообщение: " => $user_message
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" ."%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

?>