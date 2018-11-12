<!DOCTYPE html>
<html>
<head>
	<title>チャット</title>
	<style>
		h1{
			font-size:12pt;
			border-bottom: 1px solid blue;
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
		<input type = "text" name = "message">
	   <button>送信</button>
	</form>
	
<?php
$fp = fopen("data.txt","r");
while(($buff = fgets($fp)) != false)
{
	$line = explode("\t", $buff);
	echo $line[0];
	echo " <span class = \"timestamp\">".date("Y-m-d H:i:s",$line[1])."</span>";
	echo "<br>\n";
}
fclose($fp);
?>
</body>
</html>
