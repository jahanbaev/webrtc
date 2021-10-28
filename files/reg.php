<?php
 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "register";

 $con = mysqli_connect($host,$user,$password,$db);

$log = $_GET["log"];
$pass = $_GET["pass"];
$mail = $_GET["mail"];
$users = 0;
$balance = 0;
$sells = 0;
$b_sells = 0;
$visits = 0;
$b_visits = 0;
$buys = 0;


$query = "insert into register (log, pass, mail, sells, users, balance, b_sells, visits, b_visits,buys) values ('$log','$pass','$mail','$sells','$users','$balance','$b_sells','$visits','$b_visits','$buys')";
 
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>	
<h1 id="echo">
<?php 
   if(mysqli_query($con,$query)){
    echo 'success';
 }else{
 	echo 'error'; 
 }

?>
</h1>



<script type="text/javascript">

var loger = "<?php echo $log; ?>";
var pass = "<?php echo $pass; ?>" ;
var results = document.getElementById("echo").innerText;
if(results == "success"){
	localStorage.setItem("login", "true");
	localStorage.setItem("loger", loger);
	localStorage.setItem("pass", pass);	
	location="http://user.ios/account/index.php" + "?log="+ loger + "&pass=" +pass;
}else{
	alert("login set error");
}
</script>
</body>

</html>