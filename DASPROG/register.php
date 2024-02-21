<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

| <div class="container">
   <h1>Register</h1>
     <form action="register.php" method="post" name="form1">
      <table>
      <tr>
       <td>Nama Depan</td>
     <td><input type="text" name="Nama_Depan" required></td>
      </tr> <tr>
      <td>Nama Belakang</td>
     <td><input type="text" name="Nama_Belakang" required></td>
      </tr> <tr>
       <td>Username</td>
     <td><input type="teks" name="Username" required></td>
      </tr> <tr>
      <td>Password</td>
     <td><input type="password" name="Password" required></td>
      </tr>
     <tr>
     <td>level</td>
     <td>
        <select name="Level" id="Level" required>
          <option disabled selected> Pilih </option>
          <option value="ADMIN">Admin</option>
          <option value="USER">User</option>
       </select>
     </td>
    </div>
 
     <tr>
     <td></td>
    
      
    </tr>
     </tr>
     <tr>
     <button name='Submit'>Register</button>
   <?php
// Check If form submitted, insert form data into users table. 
if(isset($_POST['Submit'])) {
$namadepans= $_POST['Nama_Depan'];
$namabelakangs= $_POST['Nama_Belakang'];
$usernames = $_POST['Username'];
$passwords = $_POST['Password']; 
$levels= $_POST['Level'];
//echo($judul);
// include database connection file
include_once("koneksi.php");
// Insert user data into table
$result = mysqli_query($mysql,
"INSERT INTO user(Nama_Depan,Nama_Belakang,Username, Password, Level) VALUES ('$namadepans','$namabelakangs','$usernames', '$passwords', '$levels')");
// Show message when user added
// echo "Data added successfully. <a href='index.php'>View Data Buku</a>"; 
header("location: index.php");
}
?>
</table>
   </form>
   <button name='Submit'>Register</button>
</body>
    
</html>