<?php 

include ('koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM makanan WHERE id = '".$id."';";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);

if($row['kategori'] == "Makanan"){
    include ('edit_food.php');
}elseif($row['kategori'] == "Minuman"){
    include ('edit_drink.php');
}

?>