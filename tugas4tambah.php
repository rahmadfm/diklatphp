<html>
<head>
    <title>TUGAS 4 Lagi</title>
</head>

<body>
    <a href="tugas4.php">Lihat Data User</a>
    <br/><br/>

    <form action="tugas4tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nomor Induk</td>
                <td><input type="text" name="no_induk"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Nomor Telepon</td>
                <td><input type="text" name="no_telepon"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td>
				   <input type="submit" name="submit" value="Add">
				</td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $no_induk = strtoupper($_POST['no_induk']);
        $nama = strtoupper($_POST['nama']);
        $no_telepon = strtoupper($_POST['no_telepon']);
        $alamat = strtoupper($_POST['alamat']);

        // include database connection file
        include_once("koneksi.php");

        $result = mysqli_query($connect, "INSERT INTO siswa(no_induk, nama, no_telepon, alamat) VALUES('$no_induk','$nama','$no_telepon','$alamat')");
        // Insert user data into table
        
        	$sql = "INSERT INTO siswa(no_induk, nama, no_telepon, alamat) VALUES('$no_induk','$nama','$no_telepon','$alamat')";
			if (mysqli_query($connect, $sql)) {
    			 echo "<br>New record created successfully";
				} else {
     					echo "<br>Error: " . $sql . "<br>" . mysqli_error($connect);
				}
        // Show message when user added
        //echo "User added successfully. <a href='view.php'>View Users</a>";
    }
    ?>
</body>
</html>