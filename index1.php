<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
 
  if (!empty($_GET['save'])) {

    print('Спасибо, результаты сохранены.');
  }
  include('index.html');
}
else {
  $errors = FALSE;
  if (empty($_POST['NotifTxt'])) {
    print('Заполните текст уведомления <br/>');
    $errors = TRUE;
  }
  if ($errors) {
    exit();
  }
  $xml = new SimpleXMLElement('<document />');
  $child = $xml->AddChild('NotifTxt', $_POST['NotifTxt']);
  $s = $xml->AsXML();
  $f = '1.xml';
  file_put_contents($f, $s);
  header('Location: ?save=1');
}