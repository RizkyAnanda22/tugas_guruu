<?php
// Create database connection using config file
include_once("../config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM menu ORDER BY id_menu DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New Menu</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
     <th>nama</th> <th>jenis</th> <th>stock</th> <th>harga</th> <th>nama_penjual</th> <th>update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jenis']."</td>";
        echo "<td>".$user_data['stok']."</td>";
        echo "<td>".$user_data['harga']."</td>";   
        echo "<td>".$user_data['nama_penjual']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[id_menu]'>Edit</a> | <a href='delete.php?id=$user_data[id_menu]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>