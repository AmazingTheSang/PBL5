<?php

$conn =  new mysqli("localhost","root","","pbl5");
if($conn->connect_errno){
         echo "Ket noi that bai:" .$conn->connect_error;
         exit();
}
if (!isset($_POST['signup'])){
          die('');
      }
      $ten =trim($_POST['username']);
      $ngaysinh = trim($_POST['date']);
      $diachi = trim($_POST['diachi']);
      $email =trim($_POST['email']);
      $matkhau = trim($_POST['password']);
      $gioitinh =$_POST['gioitinh'];
      $quyen =$_POST['quyen'];
if(!$ten||!$ngaysinh||!$diachi||!$email||!$matkhau||!$gioitinh){
          echo "moi nhap du tt";
}
$trung = "SELECT * FROM user WHERE Ten = '$ten' OR email = '$email'";
$result = mysqli_query($conn, $trung);
if (mysqli_num_rows($result) > 0)
    {
        echo '<script language="javascript">alert("Bị trùng tên hoặc email!"); window.location="Dangky.php";</script>';

        // Dừng chương trình
        die ();

}
else {
        $insert_user = mysqli_query($conn,"INSERT INTO `user` (Ten,Ngaysinh,Diachi,Email,Matkhau,Gioitinh,Id_Quyen) VALUES ('$ten', '$ngaysinh', '$diachi','$email', '$matkhau', '$gioitinh','$quyen')");
        mysqli_close($conn);
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="Dangnhap.php";</script>';
}

?>