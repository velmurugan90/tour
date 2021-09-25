<?php
include("conn.php");
//  echo $_GET['id'];
 ?>
<!-- update form -->
<!DOCTYPE html>
<html lang="en">
  <head>
   <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="form">
<!-- select data from table by id -->
    <?php
    $q = "select  * from register where id= ".$_GET['id']."";
        $result = mysqli_query($conn,$q);
       $row=mysqli_fetch_assoc($result);
                //$result=$conn->query($q);
                //while($row=$result->fetch_assoc())
    ?>
<form action="update_user.php" method="POST">
<h1>user detail</h1>
        <p>
          <label for="">username:</label>
          <input
            type="text"
            name="username"
            class="instyle"
           
            value="<?php echo $row['username'] ?>"
        />
        </p>
        <p>
          <label for="">password:</label>
          <input
            type="text"
            name="password"
            class="instyle"
           
            value="<?php echo $row['password'] ?>"
          />
        </p>
        <p>
          <label for="">fullname:</label>
          <input
            type="text"
            name="fullname"
            class="instyle"
           
            value="<?php echo $row['fullname'] ?>"
          />
        </p>
        <p>
          <label for="">location:</label>
          <input
            type="text"
            name="location"
            class="instyle"
            
            value="<?php echo $row['location'] ?>"
          />
        </p>
 <p>
          <label for="">price:</label>
          <input
            type="text"
            name="price"
            class="instyle"
            
            value="<?php echo $row['price'] ?>"
          />
        </p>
 <p>
          <label for="">phno:</label>
          <input
            type="text"
            name="phno"
            class="instyle"
            
            value="<?php echo $row['phno'] ?>"
          />
        </p>
        <button class="btn">update</button>
      </form>
</div>
</body>
</html>