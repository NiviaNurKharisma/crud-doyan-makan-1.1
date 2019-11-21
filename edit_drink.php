<?php

include 'koneksi.php';

$id = $_GET["id"];

$sql = "SELECT * FROM makanan WHERE id = '".$id."';";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);

 $submit = isset($_POST['submit'])?$_POST["submit"]:"";
	if ($submit) {
		$nama = $_POST["nama"];
		$kategori = $_POST["kategori"];
		$sub = $_POST["sub"];
		$bahan = $_POST["bahan"];
		$rasa = $_POST["rasa"];
		$harga = $_POST["harga"];

	 	$sql ="
	 	   UPDATE makanan SET 
	 	   nama = '".$nama."',
	 	   kategori = '".$kategori."',
	 	   sub = '".$sub."',
	 	   bahan = '".$bahan."',
	 	   rasa = '".$rasa."',
	 	   harga = '".$harga."'
	 	   WHERE id = '". $id ."'
			;";
			
		 $result = $db->query($sql);
		 
	 	if($result){
	 		echo "
	 		<script>
	 			alert('Data succesfully changed!');
	 			window.location = 'makanan.php';
	 		</script>
	 		";
	 	}
	 	else{
	 		echo "
	 		<script>
	 			alert('Data failed changed!');
	 			window.location = 'makanan.php';
	 		</script>
	 		";
	 	}
	}
?>
<div class="container">
	<br><br>
<h1>Edit Drink Menu</h1>

<form action="" method="POST">

<div class="form-group">
	<label>Nama Menu</label><br>
	<input class= "form-control" type="text" name="nama" required="required" value="<?= $row['nama'] ?>" />
</div>

<div class="form-group">
	<label>Kategori</label><br>
	<input class= "form-control" type="text" name="kategori" required="required" value="<?= $row['kategori'] ?>"><br>
</div>

<div class="form-group">
	<label>Sub Kategori</label><br>
	<input class= "form-control" type="text" name="sub" required="required" value="<?= $row['sub'] ?>"><br>
</div>

<div class="form-group">
	<label>Komposisi</label><br>
	<textarea class="form-control" name="bahan"><?= $row['bahan'] ?></textarea><br>
</div>

<div class="form-group">
	<label>Varian</label><br>
	<?php
		if($row['rasa'] == "Chocolate"){
			echo "
			<input type='radio' name='rasa' value=Chocolate checked> Chocolate
            <input type='radio' name='rasa' value='Squash'> Squash
			<input type='radio' name='rasa' value='Milk'> Milk
			<input type='radio' name='rasa' value= 'Juice'> Juice
			<input type='radio' name='rasa' value='Coffe'> Coffe
			";
		}elseif($row['rasa'] == "Squash"){
			echo "
			<input type='radio' name='rasa' value='Chocolate' > Chocolate
            <input type='radio' name='rasa' value= Squash checked> Squash
			<input type='radio' name='rasa' value='Milk'> Milk
			<input type='radio' name='rasa' value= 'Juice'> Juice
			<input type='radio' name='rasa' value='Coffe'> Coffe
			";
        } 
        elseif($row['rasa'] == "Milk"){
			echo "
			<input type='radio' name='rasa' value='Chocolate' > Chocolate
            <input type='radio' name='rasa' value= 'Squash'> Squash
			<input type='radio' name='rasa' value= Milk checked > Milk
			<input type='radio' name='rasa' value= 'Juice'> Juice
			<input type='radio' name='rasa' value='Coffe'> Coffe
			";
		}
		elseif($row['rasa'] == "Juice"){
			echo "
			<input type='radio' name='rasa' value='Chocolate' > Chocolate
            <input type='radio' name='rasa' value= 'Squash'> Squash
			<input type='radio' name='rasa' value='Milk'> Milk
			<input type='radio' name='rasa' value= Juice checked > Juice
			<input type='radio' name='rasa' value='Coffe'> Coffe
			";
		}
		elseif($row['rasa'] == "Coffe"){
			echo "
			<input type='radio' name='rasa' value='Chocolate' > Chocolate
            <input type='radio' name='rasa' value= 'Squash'> Squash
			<input type='radio' name='rasa' value='Milk'> Milk
			<input type='radio' name='rasa' value='Juice'> Juice
			<input type='radio' name='rasa' value= 'Coffe' checked > Coffe
			";
		}
	?>
</div>

<div class="form-group">
	<label>Harga</label><br>
	<input class= "form-control" type="text" name="harga" required="required" placeholder="00000" value="<?= $row['harga'] ?>"><br><br>
</div>

<input type="submit" name="submit" value="Edit" class = 'btn btn-success btn-sm'>
</form>
</div>