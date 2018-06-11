<html>
<head>
<title>Психолог Юлия Жигулина</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style_obomne.css">
</head>
<body>

<div class="header"></div>
<div class="nav_line"></div>

<ul class="nav">
	<li><a href="index.html">ГЛАВНАЯ</a></li>
    <li><a href="obomne.html">ОБО МНЕ</a></li>
    <li><a href="form.php">КОНСУЛЬТАЦИИ</a></li>
    <li><a href="contacts.html">КОНТАКТЫ</a></li>
</ul>



<div class="cont">
<form action="vvod.php" method="POST">  
<b>Запись на прием</b> <br />

      Ваша Фамилия: <br />
        <input name="fam" placeholder="Васильев"  <?php if ($errors['fam']) {print 'class="error"';} ?> value="<?php print $values['fam']; ?>" />
       <br /> <br/>

        Ваше Имя:<br />
        <input  name="name"  placeholder="Василий"  <?php if ($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>" />
     <br /> <br/>
	  

        Ваше Отчество: <br />
        <input  name="otch"  placeholder="Васильевич"  <?php if ($errors['otch']) {print 'class="error"';} ?> value="<?php print $values['otch']; ?>" />
    <br /> <br/>

        Ваш Телефон:  <br/>
         <input name="tel" placeholder="999-999-99-99"  <?php if ($errors['tel']) {print 'class="error"';} ?> value="<?php print $values['tel']; ?>" 
 <br /><br/>
  Ваш E-mail: <br />
        <input name="mail"  placeholder="vasya@vasya.vasya"  <?php if ($errors['mail']) {print 'class="error"';} ?> value="<?php print $values['mail']; ?>" />
     <br /> <br/>
	  
Информация о ребенке <br/>  <br/>

        Имя:<br />
        <input  name="name2"  placeholder="Ванюша"  <?php if ($errors['name2']) {print 'class="error"';} ?> value="<?php print $values['name2']; ?>" />
     <br/> <br/>
	  
  Возраст: <br/>
       <select name="vosrast"> 
		<option selected disabled> Не выбрано </option>
		 <?php
		  for ($i=3; $i<14; $i++)  {print('<option value="'.$i.' " >'.$i.'</option>');}
          ?>
        </select>
   <br /> <br/>  
	  
<label> Укажите пол <br/> 
	   <input  type="radio" 
        name="pol" value="M" />
        Мужской
       <input  type="radio" 
        name="pol" value="F" />
        Женский</label><br />  <br /> 
<label> Проблема <br/>
 <textarea  placeholder="Опишите проблему" name="bio" rows="5" cols="50"></textarea>	<br/>
 
    Выберите дату </br>
  <input type="date" name="dater" /> </br>
 
  	  Выберите время
        <br/>
        <select  name="time" >
		<option selected disabled>Не выбрано</option>
             <script type="text/javascript">  
		  for (i=9; i<=18; i++)  document.writeln ('<option value="'+String(i)+' " >'+String(i)+ ':00 </option>');
          </script>
        </select>
      <br /> <br /> 
 <input   type="submit" class="st" value="Отправить" />
</form>

</div>


<div class="pic">
</div>



<div class="text_left">
</div>
<div class="text_right">
</div>






<div class="footer">
<div class="footer_left">
СВЯЗАТЬСЯ СО МНОЙ </br>
+7 903 542-91-77, с 11:00 до 21:00 </br>
MariaNifontovna@gmail.com </br>
Предоставляю услуги психолога в Москве: </br>
м. Рижская, Проспект мира, дом 78
</div>

<div class="footer_right">
<a href="https://vk.com/zhigulinajulia" target="_blank"><img src="vk-4.png" width="48" height="48" alt="VK"></a>
<a href="https://www.instagram.com/julia_zhigulina/" target="_blank"><img src="inst-4.png" width="48" height="48" alt="Instagram"></a>
</div>


<!-- <div class="top">
<a href="#top"><img src="up-4.png" width="48" 
   height="48" alt="Наверх"></a>
</div>
 -->
</body>
</html>