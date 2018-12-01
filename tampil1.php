<?php 
$txt1 = "DETAIL PRODUK ELEKTRONIK & ACCESSORIES";

$x = 5;

echo "<h2>".$txt1."</h2>";

include 'database.php';
$db = new database();
?>


<table border="1">
		<tr> 
		<th>ID Produk</th> 
		<th>NAMA PRRODUK</th> 
		<th>DESKRIPSI PRODUK</th> 
		<th>HARGA</th> 
		</tr> 
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr> 
		<td><?php echo $x ['id']; ?></td>
		<td><?php echo $x ['nama']; ?></td> 
		<td><?php echo $x ['deskripsi']; ?></td>
		<td><?php echo $x ['harga']; ?></td>
		</tr>
		<?php
	}
	?>
	
	</table>