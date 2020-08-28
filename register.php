<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con ,'usreg');
$name= $_POST['user'];
$pass= $_POST['pass'];
$s= "select * from usertable where name= '$name'";
$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);
$nmlen= strlen($name);
$pslen= strlen($pass);
// if($name=="" || $pass=="" )  
//     {
//     $num=1;
//     }
// else{
// }
if($nmlen<4 || $pslen<7 )  
    {
    $num=1;
    }
else{
}

if($num == 1)
{
    echo"username is already taken";
    
}
else
{
    $reg="insert into usertable(name ,password) values('$name' , '$pass')";
    mysqli_query($con ,$reg);
    echo"refgist success";
    
}
?>