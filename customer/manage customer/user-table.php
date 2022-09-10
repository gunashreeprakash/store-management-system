<?php

include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage CustomersS</title>

</head>
<body>


<div class="table-data">
        <div class="list-title">
 <h2>Customer List</h2>
 <link rel="stylesheet" href="style.css">
          
            </div>
  
    <table border="1">

        <tr>

            <th>id</th>
            <th>Customer_name</th>
            <th>Phone_no</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>


        </tr> 
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['Customer_name']; ?></td>
<td><?php echo $data['Phone_no'];?> </td>
<td><?php echo $data['Address']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
</tr> <?php

      $sn++; }

      }else{
            
?>

      <tr>
        <td colspan="7">No Data Found</td>
      </tr>
                
<?php

    }
?>
 
    </table>
    </div>

</body>
</html>