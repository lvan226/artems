<?php $fio = $_POST['fio'];
$number = $_POST['number'];

$fio = htmlspecialchars($fio);
$number = htmlspecialchars($number);
// <!-- преобразует все символы, которые пользователь попытается добавить в форму: -->

$fio = urldecode($fio);
$number = urldecode($number);
// <!-- Декодирует url, если пользователь попытается его добавить в форму. -->

$fio = trim($fio);
$number = trim($number);
// <!-- Удаляет пробелы -->

echo $fio;
echo "<br>";
echo $number;

mail("lvan226@list.ru", "Заявка с сайта", "ФИО:".$fio." Name: ".$number ,"From: info@lvan-dyadyura.ru \r\n");

if (mail("lvan226@list.ru", "Заявка с сайта", "ФИО: ".$fio." Name: ".$number ,"From: info@lvan-dyadyura.ru \r\n"))
{
echo "сообщение успешно отправлено";
} else {
echo "при отправке сообщения возникли ошибки";
}
?>