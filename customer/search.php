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
?>