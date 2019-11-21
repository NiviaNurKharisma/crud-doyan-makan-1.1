<?php
 include ('koneksi.php'); 
 ?>
 <div class="container">
     <br><br>
<h1> Menu</h1> <br>

<a href="add_food.php" class="btn btn-primary">(+) Add Data Food Menu</a>
<a href="add_drink.php" class="btn btn-primary">(+) Add Data Drink Menu</a> <br><br>
<table id="makanan" class="table table-bordered table-striped table-hover">

<thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Sub Kategori</th>
            <th>Komposisi</th>
            <th>Rasa/Varian</th>
            <th>Harga</th>
            <th width="138px">AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM makanan ORDER BY nama ASC"; //Query SQL
        $result = $db->query($sql); //Execute Query SQL
        $no = 1;
        while($row = $result->fetch_assoc() ) //menampilkan bentuk array
        {
            echo "
            <tr>
                <td>".$no."</td>
                <td>".$row["nama"]."</td>
                <td>".$row["kategori"]."</td>
                <td>".$row["sub"]."</td>
                <td>".$row["bahan"]."</td>
                <td>".$row["rasa"]."</td>
                <td>".$row["harga"]."</td>
                
                <td>
                    <a href= 'edit.php?id=".$row["id"].
                    "'class = 'btn btn-success btn-sm'>Edit</a>
                    |
                    <a href= 'delete_food.php?id=".$row["id"]."'
                    onclick='return confirm (\"Are you sure want to delete?\");'
                    class = 'btn btn-danger btn-sm'>Delete</a>
                </td>
            </tr>
            "; 
            $no++;   

        }
        ?>
     </tbody>
</table>
</div>