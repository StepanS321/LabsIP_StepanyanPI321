<HTML> 
<HEAD> <TITLE> Вход в систему</TITLE> </HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Здравствуйте!Введите логин: 
  <br><INPUT type="text" name="a" size="25"> 
  <P> <INPUT type="submit" name="obr" value="Войти"> 
</FORM> 
<?php
if (isset($_POST["obr"])) { 
 if (($_POST["a"]=="Степан")||($_POST["a"]=="Айдар")||($_POST["a"]=="Жанна")||($_POST["a"]=="Кристина")) { echo("Здравствуйте, " . $_POST["a"]); 
  } else { 
  	echo "Вы не зарегистрированный пользователь!";
    }
    }
?>  
</BODY> 
</HTML>