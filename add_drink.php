<?php
include ('koneksi.php');

$submit = isset($_POST["makanan_submit"])?$_POST["makanan_submit"]:"";
if($submit){
    $sql = "
        INSERT INTO makanan VALUES(
            NULL,
            '".$_POST["nama"]."',
            '".$_POST["kategori"]."',
            '".$_POST["sub"]."',
            '".$_POST["bahan"]."',
            '".$_POST["rasa"]."',
            '".$_POST["harga"]."'
        );
    ";
    $result = $db->query($sql); // Execute Query SQL
    
    if($result){
        echo "
            <script>
                alert('Data succesfully added !');
                window.location = 'makanan.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data failed added !');
                window.location = 'makanan.php';
            </script>
        ";
    }
        
}

?>
<div class="container">
    <br><br>
<h1>Add Drink Menu</h1>

<form action="" method="POST">

    <div class="form-group">
        <label>Nama Menu</label><br>
        <input class= "form-control" type="text" name="nama" required="required" /><br>
    </div>

    <div class="form-group">
        <label>Kategori</label><br>
        <input class= "form-control" type="text" name="kategori" required="required" /><br>
    </div>

    <div class="form-group">
        <label>Sub Kategori</label><br>
        <input class= "form-control" type="text" name="sub" required="required" /><br>
    </div>

    <div class="form-group">
        <label>Komposisi</label><br>
        <input class= "form-control" type="text" name="bahan" required="required"></textarea><br>
    </div>

    <div class="form-group">
        <label>Rasa/Varian</label><br>
        <select name="rasa" required="required" class="form-control">
            <option value="">- Pilih Varian -</option>
            <option value="Chocolate">Chocolate</option>
            <option value="Squash">Squash</option>
            <option value="Milk">Milk</option>
            <option value="Juice">Juice</option>
            <option value="Coffe">Coffe</option>
            <option value="-">Lainnya</option>
        </select><br>
    </div>

    <div class="form-group">
        <label>Harga</label><br>
        <input class= "form-control" type="text" name="harga" required="required" placeholder="00000" /><br>
    </div>
    <br>
    <input type="submit" name="makanan_submit" value="Save" class = 'btn btn-success btn-sm'/>

</form>
</div>
