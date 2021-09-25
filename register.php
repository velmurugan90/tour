<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tourism  Management System</title>
    
<style>
* {
  margin: 0px;
  padding: 0px;
}
html {
  background-color: #ecf0f1;
}
body {
  width: 90%;
  margin: 0px auto;
  background-image: url(./images/i1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  }
h1{
	text-align:center;
	color:blue;
}
#reg {
	margin-left:200px;
 
  }

#reg td {
  padding: 10px;
}
#reg th {
  color: #red;
  font-size: 28px;
}
#reg {
  margin: 40px auto;
  font-size: 20px;
}
#reg input[type="text"],
#reg input[type="password"] {
  width: 450px;
  height: 30px;
  border-radius: 5px;
  font-size: 20px;
  color: #4834d4;
}
#reg input[type="submit"] {
  width: 450px;
  height: 40px;

  font-family: Georgia, "Times New Roman", Times, serif;
  font-size: 30px;
  color: green;
 
  line-height: 6px;
}

</style>
</head>
<body>
     <h1>USER REGISTRATION FORM</h1>
                    <form method="POST" action="">
                    <table id="reg">
                            <tr>
                            <th>Username </th>
                                <td><input type="text" name="username" id="uname" placeholder="enter username" required></td>
                            </tr>
                            <tr>
                            <th>Password</th>
                                <td><input type="text" name="password" id="password" placeholder="enter password" required></td>
                            </tr>
                            <tr><th>full name </th>
                                <td><input type="text" name="fullname" id="fname" placeholder="enter fullname" required></td>
                            </tr>
                            <tr>
                            <th>location</th>
                                <td><input type="text" name="location" id="location" placeholder="enter location" required></td>
                            </tr>
                            <tr>
                            <th>price </th>
                                <td><input type="text" name="price" id="price" placeholder="enter price" required></td>
                            </tr>
                            <tr>
                            <th>Phone number</th>
                                <td><input type="text" name="phno" id="phno" placeholder="enter phno" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right"><input type="submit" name="register" value="register"></td>
                            </tr>
                            <tr>
                                <td>click <a href="./login.php">here</a>  to go to login..</td>
                            </tr>
                        </table>
                    </form>
<img src="./IMG-20210912-WA0011.jpg">
        

<?php
if(isset($_POST['register']))
{
$username=$_POST["username"];
$password=$_POST["password"];
$fullname=$_POST["fullname"];
$location=$_POST["location"];
$price=$_POST["price"];
$phno=$_POST["phno"];
if($username !=""&& $password !="")
{
$q="insert into register(username,password,fullname,location,price,phno)values('".$username."','".$password."','".$fullname."','".$location."','".$price."','".$phno."')";
$result=$conn->query($q);
echo $result;
if($result==true)
{
echo "record successfully inserted";
}
else
echo "not success";
}
}
?>
</body>
</html>


