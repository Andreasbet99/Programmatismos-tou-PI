<html><head></head><body>
<?php

define('host', "localhost");
define('dbusername', "id9583645_datab1");
define('dbpassword', "datab123");
define('dbname', "id9583645_datab");
$UserN="";
$pass="";



        
		if(isset($_POST['submit'])){
			$UserN=$_POST['UserN'];
            $pass=$_POST['pass'];
		if((!empty($UserN)) AND (!empty($pass)) ){
			
            $conn= mysqli_connect(host,dbusername, dbpassword, dbname);
            $db = mysqli_select_db($conn,dbname) or die(mysql_error()) or die(mysql_error());
			$sql= "INSERT INTO PINAKAS1(Username, Password) VALUES('$UserN','$pass')";}
			 $result=mysqli_query($conn,$sql);
  
			$num_rows = mysqli_num_rows($result);
			
			if($conn->query($sql)) { echo "<script>window.location='index.html';</script>";
	}
		
		}
	
?>
</body>
</html>
