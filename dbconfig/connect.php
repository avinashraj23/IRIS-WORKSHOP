	<?php
   include("dbconnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT * FROM user WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {

       $_SESSION['login_user'] = $myusername;
         
        echo "<?php<h1>Welcome </h1>";
         //header("location: welcome.php");
      }else {
        
        $error = "Your Login Name or Password is invalid";
      print_r($error);
      }
   }
?>

