<?php
	setcookie("uname",$_GET["uname"],time() + (60*60*24*7));
?>

<!DOCTYPE html>
<html>
<head>
	<title>チャット</title>
	<style>
		h1{
			font-size:12pt;
			border-bottom: 1px solid blue;
			color: yellow;
			}
		form{
			border: 1px solid aqua;
			padding: 10px;
			margin-bottom;
			}
		.timestamp{
			color: blue;
			font-size: 8px;
			}	
	</style>
</head>
<body>

	<h1>秘密のチャット</h1>
	<form action = "write.php">
		<?= $_GET['uname']; ?>
		<input type="hidden" name = "uname" value = "<?= $_GET['uname'] ?>">
		<input type = "text" name = "message">
	   <button>送信</button>
	</form>
	
<?php
$fp = fopen("data.txt","r");
while(($buff = fgets($fp)) != false)
{
	$line = explode("\t", $buff);
	echo $line[0].":";
	echo $line[1];
	echo " <span class = \"timestamp\">".date("Y-m-d H:i:s",$line[2])."</span>";
	echo "<br>\n";
}
fclose($fp);
?>
</body>
</html>
