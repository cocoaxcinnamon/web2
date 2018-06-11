<html>

  <head>
    <meta charset="UTF-8">
    <title>Текст уведомления</title>
	<style>
body{
  background: #c4c7cb;
  background-image: -webkit-radial-gradient(cover, #FFF,#D1D1D1	);
  background-image: -moz-radial-gradient(cover, #e8eaec, #a4a8ae);
  background-image: -o-radial-gradient(cover, #e8eaec, #a4a8ae);
  background-image: radial-gradient(cover, #e8eaec, #a4a8ae);
  font:28px "Bonveno", "Century Gothic";
  text-align: center;
}

html{
  min-height:100%;
}
input[type="text"] {
      border-width: 1px;
	  height: 40px;
	  width: 580px;
	  font:24px "Bonveno", "Century Gothic";
      outline: none;
      margin: 0;
	  text-align: center;
      }
	  input[type="submit"] {
      border-width: 1px;
	  background: red;
	  height: 40px;
	  width: 80px;
	  font:24px "Bonveno", "Century Gothic";
      outline: none;
      margin: 0;
	  text-align: center;
	 color: white; 
      }
	</style>
	
  </head>
<?php 

if (empty($_SERVER['PHP_AUTH_USER']) ||
	empty($_SERVER['PHP_AUTH_PW']) ||
	$_SERVER['PHP_AUTH_USER'] != 'admin' ||
	$_SERVER['PHP_AUTH_PW'] != '12345') {
	header('HTTP/1.1 401 Unanthorized');
	header('WWW-Authenticate: Basic realm="My site"');
	print('<h1>401 Требуется авторизация</h1>');
	exit();
}

print('Введите текст нового уведомления');
print('<form action="index1.php" method="POST">

<input maxlength="150" name="NotifTxt" type="text" placeholder="Текст уведомления"/>

<input name="send" value="OK"  type="submit">

</form> ');