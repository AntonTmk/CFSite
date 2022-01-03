<html>
	<head>
		</head>
	<body>
			<?php		
	
	
	
	$mysqli = new mysqli ("127.0.0.1", "mysql", "mysql", "myloom");
	$mysqli->query ("SET NAMES utf8'");
	$mysqli->query("set @i:=-1;");
	$mysqli->query("update myloom.rev set id=(@i := @i+1) order by id;");
	
		
	?>
		<?php		
	
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['ind']))			{$name1			= $_POST['ind'];		if ($name1 == '')	{unset($name1);}}
if (isset($_POST['int']))			{$text			= $_POST['int'];		if ($text == '')	{unset($text);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}

	
	$mysqli = new mysqli ("127.0.0.1", "mysql", "mysql", "myloom");
	$mysqli->query ("SET NAMES utf8'");
	$mysqli->query("set @i:=-1;");
	$mysqli->query("update myloom.rev set id=(@i := @i+1) order by id;");
		
			$mysqli = new mysqli ("127.0.0.1", "mysql", "mysql", "myloom");
	$mysqli->query ("SET NAMES utf8'");
		
		$res_set = $mysqli->query("SELECT MAX(ID) FROM myloom.rev LIMIT 1");
		$row_cnt = mysqli_num_rows($res_set);
$succes = $mysqli->query("INSERT INTO `rev` (id, name, text) VALUES ($row_cnt+1, '".$name1."', '".$text."')");
	
		
	?>
			<?php		
	
	
	
	$mysqli = new mysqli ("127.0.0.1", "mysql", "mysql", "myloom");
	$mysqli->query ("SET NAMES utf8'");
	$mysqli->query("set @i:=-1;");
	$mysqli->query("update myloom.rev set id=(@i := @i+1) order by id;");
	
		
	?>
		<table align='center'><tr><td><img src="readyfon.jpg"><td><tr></table>
		</body>