<?php
include("conn.php");
    //select data from table
    $q="select * from register";
    $result=$conn->query($q);
?>

<!-- Select data from table form -->
<!DOCTYPE html>
  <html lang="en">
  <head>
  <style>
        body{
            background-color:#999966;
        }
        table {
            margin: 0 auto;
            font-size: large;
            border: 2px solid black;
        }
        h1 {
            text-align: center;
            color:#80ff00;
            font-size: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        td {
            background-color: #E4F5D4;
            border: 10px solid black;
        }
        th{
            color:	#00bfff;
            font-size:30px;
            background-color: #002733;
        }
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 15px;
            text-align: center;
        }
        td {
            font-weight: lighter;
        }
    </style>
  </head>
  <body>
  <section>
        <h1>User information</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
              <th>username</th>
              <th>password</th>
              <th>fullname</th>
              <th>location</th>
<th>price</th>
<th>phno</th>
            </tr>

            <?php
             while($row=$result->fetch_assoc())
             {
            ?>
            <tr>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['fullname'];?></td>
                <td><?php echo $row['location'];?></td>
 <td><?php echo $row['price'];?></td>
 <td><?php echo $row['phno'];?></td>
<td><a href="./update.php?id=<?php echo $row['id']; ?>">update</a></td>
                
            </tr>
        <?php
            }
        ?>

        </table>
    </section>
  </body>
  </html>