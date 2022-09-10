<?php
$servername="localhost";
$username="root";
$password="";
$dbname="beru_naturals";
$link=mysqli_connect($servername,$username,$password,$dbname);
$con=mysqli_select_db($link,$dbname);

if($con)
{

}
else
{
    die("connection failed because".mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search customer</title>
</head>
<body>
    <form name="form1"  method="post"> 
        <table>
        <tr>
                <td>customer id</td>
                <td><input type="text" name="id"></td>
            </tr>
        
            
            <td colspan="2" allign="center">
            
                
                <input type="submit" name="submit5" value="search">
            </td>
            </tr>
            </table>
            </form>
</body>
</html>

<?php


if(isset($_POST["submit5"]))
{
   $res=mysqli_query($link,"select * from customer where id='$_POST[id]'");
   echo"<table border=1>";
   echo"<tr>";
   echo"<th>"; echo"id"; echo"</th>";
   echo"<th>"; echo"Customer_name"; echo"</th>";
   echo"<th>"; echo"Phone_no"; echo"</th>";
   echo"<th>"; echo"Address"; echo"</th>";
   echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo"<tr>";
echo"<td>"; echo $row["id"]; echo"</td>";
echo"<td>"; echo $row["Customer_name"]; echo"</td>"; 
echo"<td>"; echo $row["Phone_no"]; echo"</td>"; 
echo"<td>"; echo $row["Address"]; echo"</td>"; 
echo"</tr>";
}
echo"</table>";
}
