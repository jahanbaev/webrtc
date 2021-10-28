<?php
 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "register";
 $con = mysqli_connect($host,$user,$password,$db);
$log = $_GET["log"];
$pass = $_GET["pass"];

$sql = "select * from register where log = '$log' and pass='$pass'";
 $result = mysqli_query($con,$sql);
 
$row = mysqli_fetch_assoc($result);
$mail = $row['mail'];
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
   if($mail !== null ){
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