<?php
 include ('koneksi.php'); 
 ?>
 <div class="container">
     <br><br>
<h1> Menu</h1> <br>

<a href="add_drink.php" class="btn btn-primary">(+) Add Data Drink Menu</a> 

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
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM minuman ORDER BY nama ASC"; //Query SQL
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
                

            "; 
            $no++;   

        }
        ?>
     </tbody>
</table>
</div>