<?php
if (isset($_POST['submit'])){
	                   	$conn=mysqli_connect('localhost','moamen','moamen123456','moamen') ;
                       if(!$conn){
                     	echo ' Connection error '.mysql_connect_error();
                       }
                                              $username=$_POST['name'];
                                              $password=$_POST['pass'];
                                              $sql = " SELECT * FROM  user ";
                                             if(!$result=mysqli_query($conn,$sql)){
                                            echo "error";
                                             } else{
                                             	while ( $row=$result->fetch_array() ) {
                                             	if($row[1]==$username and $row[3]==$password){
                                                 echo "<script > location.href='index.php'</script>";
                         	                  }
                                            }
                                             echo "<script> alert ('Password or Username is not correct ');
	                             location.href='login.php';
	                           </script>";
                                             }
                                         }
?>