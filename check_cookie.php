<?php
setcookie("testcookie", "1");
if (!array_key_exists("testcookie", $_COOKIE)) header("Refresh: 0");

print("***Выполняется проверка браузера на поддержку Cookie***");
print("<br />");
print("Запись...<br />");
print("Чтение...<br />");
if (array_key_exists("testcookie", $_COOKIE)) :
	print("<span style='color: green;'>Куки поддерживаются!</span>");
else :
	print("<span style='color: red;'>Куки не поддерживаются!</span>");
endif;
?>