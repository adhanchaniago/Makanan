<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'hewan');


?>

<!DOCTYPE html>
<html>
<head>
  <title>form login</title>
</head> 
  <style>
    body{
      background-image: url(images/lalat.jpg);
      background-size: 100%; 
      font-family: arial;
    }
    table{
      width: 350px;
      margin:100px auto;
      padding: 20px 40px;
      border:1px solid #ccc;
      background:rgba(255,255,255,0.77);
      border-radius: 10px;
      box-shadow: 0 0 10px #fff;
    }
    input[type="text"],input[type="password"]{
      border:1px solid rgba(51,51,51,.5);
      border-radius: 10px;
      padding: 5px;
      font-size: 15px;
      line-height: 20px;
      width: 100%;
      text-align: center;
    }
    input[type="submit"]{
      margin-top: 15px;
      font-size: 18px;
      border:1px solid #000;
      padding: 5px 10px;
      border:1px solid rgba(51,51,51,.5);
      border-radius: 10px;
    }
    h3{
      font-size: 9px;
      text-align: center;
    } 
  </style>
<body>
  <form action="proses_registrasi.php" method="post" name="form1">
    <table>
      <tr id="header">
        <td colspan="2"><h2>Login Disini</h2></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" placeholder="username"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" placeholder="password"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Daftar">
        <td><h3>untuk percobaan masukkan username admin password admin</h3></td>
      </tr>
    </table>
  </form> 

</body>
</html>