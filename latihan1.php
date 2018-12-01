<?php 
$txt1 = "DETAIL PRODUK ELEKTRONIK & ACCESSORIES";

$x = 5;

echo "<h2>".$txt1."</h2>";


$db_host = "localhost"; // Nama Server 
$db_user = "latihan"; // User Server 
$db_pass = "latihan"; // Password Server 
$db_name = "crud"; // Nama Database 
$conn = mysqli_connect($db_host,
$db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . 
	mysqli_connect_error());
} 


$sql = "Select id, nama, deskripsi, harga from produk"; 
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . 
	mysqli_error($conn)); 
} 


echo "<table border='1'>

<thead> 
		<tr> 
		<th>ID Produk</th> 
		<th>NAMA PRRODUK</th> 
		<th>DESKRIPSI PRODUK</th> 
		<th>HARGA</th> 
		</tr> 
</thead>
<tbody>";


while ($row = mysqli_fetch_array($query))
{ 
	echo '<tr> 
				<td>'.$row['id'].'</td> 
				<td>'.$row['nama'].'</td>
				<td>'.$row['deskripsi'].'</td> 
				<td>'.$row['harga'].'</td>
		</tr>'; 
} 
	echo "	
		</tbody> 
	</table>"; 
	?>
	