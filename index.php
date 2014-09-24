<html Doctype='html'>
<head>
<title>my page</title>
<script src='my.js'></script>
<link href='my.css' type='text/css' rel='stylesheet'></link>
</head>
<h1><?php 
echo "my first page";
?></h1>
<p>
<?php
echo "hello php";
?></p>
<div id='tower'>
<?php
for($i=0;$i<100;$i++){
	for ($j=200;$j>$i;$j--){
		echo "&nbsp";
	}
	for ($j=-1;$j<$i;$j++){
		echo "*";
	}
	echo "<br/>";
	
}

?>
</div>
</html>
