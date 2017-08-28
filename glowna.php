<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>biblioteka</title>
</head>

<body>
	<?php

	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	

	
?>
<br><br>
<p><b>Książki do wypożyczenia:</b>
<p><a href="zlew.php">Opowieści z Narnii - Lew, czarownica i stara szafa</a>
 <p><input type="submit" value="Wypożycz" />
<p><a href="zksiaze.php">Opowieści z Narnii - Książę Kaspian</a>  
<p><input type="submit" value="Wypożycz" />
<p><a href="zpodroz.php">Opowieści z Narnii - Podróż wędrowca do świtu</a>  
<p><input type="submit" value="Wypożycz" />
<p><a href="zsrebrne.php">Opowieści z Narnii - Srebrne krzesło</a>  
<p><input type="submit" value="Wypożycz" />
<p><a href="zkon.php">Opowieści z Narnii - Koń i jego chłopiec</a>  
<p><input type="submit" value="Wypożycz" /> 
<p><a href="zsiostrzeniec.php">Opowieści z Narnii - Siostrzeniec czarodzieja</a>  
<p><input type="submit" value="Wypożycz" />
<p><a href="zostatnia.php">Opowieści z Narnii - Ostatnia bitwa</a> 
<p><input type="submit" value="Wypożycz" />

</body>
</html>