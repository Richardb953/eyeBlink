<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content=""  />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>formulaaar</title>
</head>

<body>
<?php 

echo "nasledujuce data boli priajte: <br/>";
echo "meno:" .$_GET[meno]."<br/>";
echo "priezvisko:" .$_GET[priezvisko]."<br/>";
echo "vek:" .$_GET[vek] . "<br/>";


?>

<br />

<?php 
if($_POST['heslo'] == "12345"){
echo "nasledujuce data boli priajte: <br/>";
echo "meno:" .$_POST[meno]."<br/>";
echo "priezvisko:" .$_POST[priezvisko]."<br/>";
echo "vek:" .$_POST[vek] . "<br/>";
}else{ echo "login failed"; }

?>

<br/>

<?php
echo "zoznam:&nbsp;&nbsp;&nbsp;&nbsp; <br />";
echo "zoznam:".$_POST[mesto]."<br />";
?>






</body>
</html>