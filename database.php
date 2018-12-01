<?php
class database{
	var $host = "localhost";
	var $uname = "latihan";
	var $pass = "latihan";
	var $db = "crud";
	
	//$conn = mysqli_connect($db_host,
	//$db_user, $db_pass, $db_name);
	//if (!$conn) {
		//die ('Gagal terhubung MySQL: ' . 
		//mysqli_connect_error());
	function __construct(){
	$this->dbn=mysqli_connect($this->host, $this->uname, $this->pass,$this->db); }
		//mysqli_select_db($this->db);
	//}
	
	function tampil_data(){
		$data = mysqli_query($this->dbn,"select * from produk");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
			return $hasil;
		}
	}
	}

	
/*$db_host = "localhost"; // Nama Server 
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
	</table>"; */
	?>
	