<?php
    $db = mysqli_connect("localhost", "root", "", "mycollege");
    session_start();

if(isset($_POST['submit']))
{
	$usrname=$_POST['usrnme'];
	$pswrd=$_POST['psw'];
	$qry="select * from tbl_login where username='$usrname' and pass='$pswrd'";
	$result=mysqli_query($db,$qry);
    $row=mysqli_fetch_array($result);
    
    $_SESSION['log_id']=$row['usr_id'];
	$_SESSION['role']=$row['role'];

	$count=mysqli_num_rows($result);
	if($count==1)
	{
		if($_SESSION['role']=="admin")
		{
			header("Location:../admin/home.php");	
		}
		else if($_SESSION['role']=="student") 
		{
			header("Location:../students/studenthome.php");
		}
	}
	else 
		{
            echo "<script> alert('Invalid login details....'); window.location.href='../login.php';</script>";
		}
}
?>