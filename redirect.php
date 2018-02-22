<?php



if(isset($_POST['login']))
	{
		$login=$_POST['login'];
    }
    if(isset($_POST['password']))
    {
    	$password=$_POST['password'];
    }

echo $login, $password;
$url="https://aulavirtual.emprendermisiones.com/index.php?login=".$login."?password=".$password;
echo $url;
  ?>