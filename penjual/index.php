<?php
// Create database connection using config file
include_once("../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY id_penjual DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New Penjual</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
     <th>Nama</th> <th>telepon</th> <th>Alamat</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_penjual']."</td>";
        echo "<td>".$user_data['noHp']."</td>";
        echo "<td>".$user_data['Alamat']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id_penjual]'>Edit</a> | <a href='delete.php?id=$user_data[id_penjual]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>