<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//1
$n1=$_REQUEST["n1"];
$n2=$_REQUEST["n2"];
$op=$_REQUEST["cal"];

//2

if($n1 == "" |$n2 =="")
{
	echo("Empty Data");
}
else
{
switch($op)	
{
	case '+':
	echo($n1+$n2);
	break;
	case '-':
	echo($n1-$n2);
	break;
	case '*':
	echo($n1*$n2);
	break;
	case '/':
	if($n2 ==0)
	{
		echo("Can not divid by 0");
	}
	else
	{
	echo($n1/$n2);
	}
	break;
	
}
}
?>
</body>
</html>