<?php

$conn =  new mysqli("localhost","root","","pbl5");
if($conn->connect_errno){
         echo "Ket noi that bai:" .$conn->connect_error;
         exit();

}
if (!isset($_POST['signin'])){
    die('');
}
$username =trim($_POST['username']);
$password=trim($_POST['password']);
$pass = "SELECT * FROM user WHERE Ten = '$username'";
$result = mysqli_query($conn, $pass);
$row = mysqli_fetch_array($result);
$matkhau= $row['Matkhau'];


 if ($password=="")
     {
        echo '<script language="javascript">alert("Vui lòng nhập mật khẩu !!!"); window.location="Dangnhap.php";</script>';

         // Dừng chương trình
     //    die ();

 }
  else {

    if ($matkhau==$password)
       
        echo '<script language="javascript">alert("Đăng nhập thành công!"); window.location="Trangchu.php";</script>';
      

    else
         echo '<script language="javascript">alert("Sai mật khẩu , vui lòng nhập lại !!!"); window.location="Dangnhap.php";</script>';
         
  }
?>