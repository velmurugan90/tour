<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System</title>
    
	<style>
	* {
  margin: 0px;
  padding: 0px;
}
html {
  background-color: #ecf0f1;
}
body {
  width: 100%;
  margin: 0px auto;
  background-image: url(./images/i1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  /* opacity: 0.8; */
}
h1{
	font-size: 40px;
		text-align:center;
		color:blue;
	
}







#LoginForm {
	

  min-height: 350px;
  border: 1px solid #f3f5ee;
  margin: 50px auto;
  border-radius: 10px;
  box-shadow: 2px 2px 2px rgb(233, 223, 230);
}

	
#LoginTable td {
  padding: 10px;
}
#LoginTable th {
  color: #red;
  font-size: 28px;
}
#LoginTable {
  margin: 50px auto;
  font-size: 20px;
}
#LoginTable a {
  color: green;
  text-decoration: none;
}


#LoginTable input[type="text"],
#LoginTable input[type="password"] {
  width: 250px;
  height: 30px;
  border-radius: 5px;
  font-size: 20px;
  color: #4834d4;
}
#LoginTable input[type="submit"] {
  width: 150px;
  height: 40px;
  border-radius: 8px;
  border: 2px solid rgb(59, 15, 15);
  font-family: Georgia, "Times New Roman", Times, serif;
  font-size: 30px;
  color: #2f3542;
 
  line-height: 6px;
}
.nav{
	 float:left;
	  height: 60px;
	 font-size: 30px;
	  width: 100%;
	  line-height:60px;
	  background-color: rgba(63, 58, 58, 0.904);
}
.nav a:hover {
  color: rgb(241, 143, 31);
}
.nav a {
  text-transform: uppercase;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 16px;
  color: rgb(250, 241, 241);
 
  transition: color 0.8s;
}
h2{
	color:orange;
	font-size:30px;
	text-align:center;
	margin-top:80px;
}

	</style>
</head>
<body>
    <h1>Tourism Management System</h1>

   <div class="nav">
   
        <a href="./home.php">home</a>
       
        <a href="about.php">about us</a>
              
    </div>
    
    
    <div id="container">
      
                
                    <h2>LOGIN FORM</h2>
                    <form method="POST" action="">
                    <table border=1 id="LoginTable">
                            <tr>
                            <th>Username </th>
                                <td><input type="text" name="uname" id="uname" placeholder="enter username" ></td>
                            </tr>
                            <tr>
                            <th>Password</th>
                                <td><input type="password" name="password" id="pass" placeholder="enter password" ></td>
                            </tr>
                            <tr><td><input type="checkbox" name="remember" id="remember"></td>
                                <td><input type="submit" name="login" value="login" ></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2">click <a href="./register.php">here</a> here to register..</td>
                            </tr>
							
                        </table>
                    </form>
</div>
<img src="./IMG-20210912-WA0014.jpg">
<?php
if(!empty($_POST['login']))
    {
        $uname=$_POST['uname'];
        $pass=$_POST['password'];

        $sql="select * from register where username='$uname' and password='$pass'";
                        
        $res=$conn->query($sql);
        if($row=$res->fetch_assoc())
        {
            if(isset($_POST["remember"]))
        {
            echo"remember";
            setcookie('uname',$uname,(time()+2*24*60*60));
            setcookie('password',$pass,(time()+2*24*60*60));

        }
            header("location: ./select.php");
        
            // echo "success";
        }
        else{
            echo '<script type="text/javascript">alert("please enter correct Username or Password ...")</script>';

        }

    }
?>
</body>
</html>
