<?php
include 'koneksi.php';
$id = $_GET["id"];

$sql = "DELETE FROM makanan WHERE id='".$id."'";
$result = $db-> query ($sql);
if($result){
      echo"
      <script>
      alert('Data successfully deleted!');
      window.location = 'makanan.php';
      </script>
      ";
}
else{
      echo"
      <scripit>
      alert('Error!');
      window.location = 'makanan.php';
      </script>
      ";
}
?>