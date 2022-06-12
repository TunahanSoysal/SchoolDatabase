
<head>
<title>User database</title>
</head>
<body style="background-color:#d6dbcc">
	     
<div align = "center" style="position:absolute;top:50%;left:50%;-ms-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);">
    <div style = "width:300px; border: solid 3px #333333;background-color:#023047 " align = "center">
     
				
            <div style = "margin:auto">
                <h3 style="align:center;color: #ffb703"><font face="Arial, Helvetica, sans-serif">School User Interface</font></h3>
               
               <form action = "" method = "post">
                   <label style="color:#ffb703"><font face="Arial, Helvetica, sans-serif">User Name:</font></label><input type = "text" name = "ssn" /><br /><br />
                  <label style="color:#ffb703"><font face="Arial, Helvetica, sans-serif"> Password  :  </font></label><input type = "password" name = "Password" /><br/><br />
                  <input style="color: #023047;background-color:#e9d8a6 " type = "submit" value = " Log in " name = "submit1"/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>
<?php
include './dbconnect.php';

$ssn = filter_input(INPUT_POST, 'ssn');  
$password = filter_input(INPUT_POST, 'Password');
session_start();
$_SESSION['ssn'] = $ssn;

$query = "SELECT * FROM school.userr where ssn = '$ssn' and Password = '$password';";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
$row  = mysqli_fetch_assoc($result);

if($num == 1){ 
    $role = $row['role']; 
    if($role == "instructor"){
        header('Location:Instructor.php');
    }else{
        header('Location:Student.php');
    }    
     
}else if(isset($_POST["submit1"])){
    echo "Login failed. Invalid username or password.";  
    }
mysqli_close($conn);
?> 

   </body>
   
 
   
    
        




