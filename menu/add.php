<html>
<head>
    <title>Add Menu</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
             <tr> 
                 <tr> 
                     <td>nama</td>
                     <td><input type="text" name="nama"></td>
                 </tr>
                <td>jenis</td>
                <td>
                <select name="jenis">
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>
                </td>
            </tr>
             <tr> 
                <td>stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>penjual</td>
                <td>
                    <select name="nama_penjual">
                    <?php
                    include_once("../config.php");
                    $penjual = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY id_penjual DESC");
                    while ($data = mysqli_fetch_array($penjual)) {
                        echo '<option value="'.$data ['id_penjual'].'"> '.$data ['nama_penjual'].' </option>';}
                    ?>
                    </select>
                </td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $nama_penjual = $_POST['nama_penjual'];
        
        // include database connection file
        include_once("../config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO menu (nama,jenis,stok,harga,id_penjual) VALUES('$nama','$jenis','$stok','$harga','$id_penjual')");
        
        // Show message when user added
        echo "Menu added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>