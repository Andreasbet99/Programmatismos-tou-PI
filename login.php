<html><head></head><body>



</body>

</html>
<?php 

define('host', "localhost");
define('dbusername', "id9583645_datab1");
define('dbpassword', "datab123");
define('dbname', "id9583645_datab");
$username="";
$password="";
if(isset($_POST['login'])){
			$username=$_POST['user'];
            $password=$_POST['password'];
		if((!empty($username)) AND (!empty($password)) ){
			
            $conn= mysqli_connect(host,dbusername, dbpassword, dbname);
            $db = mysqli_select_db($conn,dbname) or die(mysql_error()) or die(mysql_error());
			$sql= "SELECT * FROM PINAKAS1 WHERE Username='$username' AND Password='$password'";}
			 $result=mysqli_query($conn,$sql);
  
			$num_rows = mysqli_num_rows($result);
			
			if($conn->query($sql)) {if($num_rows>0){
		echo "<script>window.alert('Welcome'); window.location='http://anbetenagkarav.000webhostapp.com/Cart.php';</script>";}
			    else {echo "<script>window.alert('Wrong data'); 
			    window.location='login.html';</script>";}
			}}

?>