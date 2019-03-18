<?php
/*$file = fopen("text.txt", "a+");
fputs($file, "New string" . PHP_EOL);
fclose($file);

$file = fopen("text.txt", "r");
if (!$file){
 	echo "Ошибка открытия файла";
 }  else {
 	    while (!feof($file)){
 	    	$line = fgets($file);
 	    	echo $line."<br />";
 	    }
 }
 fclose($file);
 $file = fopen("text.txt", "a+");
 if (!$file){
 	echo "Ошибка открытия файла";
 }  else {
 	$line = [];
 	fputs($file, "New str".PHP_EOL);
 	while (!feof($f)){
 		$line[] = fgets($f);
 	}
    print_r(implode("<br>", $line));
 }
fclose($file);
*/
if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
} else {
	$username="";
    $password="";
}
$data = file('users.txt');
foreach ($data as $id => $users) {
	list( $name, $pas ) = explode( ' ', $users );
    echo $id . " : " . $users . " : " . $name ." : " . $pas ."<br />\n";
}



?>
<html>
    <head>
    <title> </title>
    </head>
    <body>
	     <form name ="authorization" action="" method= "POST" align="center">
	     	<label>Имя &nbsp; &nbsp;</label>
	     	<input type="text" name="username" value=""><br /><br />
	     	<label>Пароль</label>
	     	<input type="password" name="password" value=""><br /><br / >
	     	<input type="submit" name="submit">
	     	
	     </form>   
	</body>
</html>