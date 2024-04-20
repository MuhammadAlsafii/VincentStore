<?php
	            if (isset($_POST['submit'])){
	                   	$conn=mysqli_connect('localhost','moamen','moamen123456','moamen') ;
// check connection 
                       if(!$conn){
                     	echo ' Connection error '.mysql_connect_error();
                       }
	             	//
                    $username=$_POST['name'];
                    $password=$_POST['pass'];
                    echo $username .$password;
                       $sql = " SELECT * FROM  user  WHERE username ='$username' and Password='$password' "; 
                  
                         $result=mysqli_query($conn,$sql);
                         $row=mysqli_fetch_assoc(1);
                        // $row=mysqli_fetch_assoc($result);
                        // echo ( $row['username']);
                       
                         if($row['username']==$username and $row['Password']==$password){
                         	$_SESSION['Email']=$_POST['Email'];
                         	//echo "gfgfgfgf";
                         	 echo "<script > location.href='index.php'</script>";
                         }else{
                             // echo "error";
                         /*	echo "<script> alert ('You should log in first');
	                             location.href='login.php';
	                           </script>";*/
                         }
                           }
            ?>  