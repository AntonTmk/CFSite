<HTML>
<head>
<style>
	input[type=submit] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
	.semiopacity { /* Поля вокруг текста */
  background: url(004.png); /* Полупрозрачный фон */
  }
	
A {
    text-decoration: none;
	color: white;
	font-family: "Comic Sans MS", "Comic Sans", cursive;
   }
   p {
    text-decoration: none;
	color: white;
	font-family: "Comic Sans MS", "Comic Sans", cursive;
   }
	
   body {
    background: url(inde2.jpg);
	   background-attachment: fixed;
   }
  </style>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</head>
<body>
	
<br>
<table border='0' align='right' width='50%'><tr><td><a href='index.php'><font color='white' size='5' align='right'>Головна   </a></td>
<td><a href='cat.php'><font color='white' size='5'>Каталог</a></td>
<td><a href='aboutus.php'><font color='white' size='5'>Про Нас</a></td>
<td><a href='review.php'><font color='white' size='5'>Відгуки</a></td></tr>
</table>

<br><br><br>

<table border="0" align="center"></tr><tr>
	<td width="350px"><form name='nam' action="ready.php" method="post" target="_blank">
	<input type="text" name="ind" placeholder="Ваше ім'я" /></td></tr><tr><td>
	<textarea type="textarea"  rows="20" cols="150" name="int" placeholder="Ваш відгук чи пропозиції..." ></textarea>
	</td></tr><tr><td><input type="submit" name="ready" />
	</form> </td>
	</tr>
		<?php		
	
	
	
	$mysqli = new mysqli ("127.0.0.1", "mysql", "mysql", "myloom");
	$mysqli->query ("SET NAMES utf8'");
	$mysqli->query("set @i:=-1;");
	$mysqli->query("update myloom.rev set id=(@i := @i+1) order by id;");
	
		
	?>
	<?php
	
	$mysqli = new mysqli ("127.0.0.1", "mysql", "mysql", "myloom");
	$mysqli->query ("SET NAMES utf8'");
	
	function printdata($res_set){
		$num=0;
		while(($row = $res_set->fetch_assoc())!=false){
			$mysqli = new mysqli ("127.0.0.1", "mysql", "mysql", "myloom");
	$mysqli->query ("SET NAMES utf8'");
		
			
			$mi = $mysqli->query("SELECT name FROM myloom.rev where id = $num");
			$result = mysqli_fetch_row($mi);
echo "<tr><td width='500px' ><font color='white' size='5'><u>$result[0]</u></td></tr>";
			
			$mi = $mysqli->query("SELECT text FROM myloom.rev where id = $num");
			$result = mysqli_fetch_row($mi);
echo "<tr><td width='500px' ><font color='white' size='5'>$result[0]</td></tr>";
				$num=$num+1;
		
		}
	}
	
	$mysqli = new mysqli ("127.0.0.1", "mysql", "mysql", "myloom");
	$mysqli->query ("SET NAMES utf8'");
	
	
	$succes = $mysqli->query("SELECT * FROM myloom.rev;");
	printdata($succes);
	
	?>
	</table>
	<br><br><br><br><br>
<table border='0'  align="bootom" height="400px" width='100%' bgcolor="#1C1C1C"><tr><td width='12%'></td><td align="center"><p><font color='white' size='4' align='right' > Адреси<br>
М. Чернівці Героїв Майдану 47В<br>
М. Київ Польова 12А<br>
М. Львів Стрийська 53 <br> </td><td align="center"><p><font color='white' size='4'>Зв'язок з нами<br>
Chow.Yum@gmail.command<br>
+38(055)555 55 55<br></p></td><td align="center"><p><font color='white' size='4'>Графік роботи<br>
пн-пт      10,00-21,00<br>
сб-нд      11,00-19,00<br></p></td><td width='12%'></td></tr>
	</table>

</body>
</HTML>
