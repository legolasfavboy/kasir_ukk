<div class="card">
    <div class="card-body">
        <h3 class="">Tambah Produk</h3>
                    
                    
        <form class="pt-3 mt-3" action="" method="post">
            <div class="form-group">
                <p class="col-form-label" for="">ID Produk</p>
                <input type="text" name="idproduk" class="form-control form-control" id="exampleInputEmail1" placeholder="123xxx">
            </div>
            <div class="form-group">
                <p class="col-form-label" for="">Nama Produk</p>
                <input type="text" name="NamaProduk" class="form-control form-control" id="exampleInputEmail1" placeholder="Nama Barang">
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <p class="col-form-label" for="">Harga</p>
                    <input type="number" name="Harga" class="form-control form-control" id="exampleInputEmail1" placeholder="0">
                </div>
                <div class="form-group col-sm-6">
                    <p class="col-form-label" for="">Stok</p>
                    <input type="number" name="stok" class="form-control form-control" id="exampleInputEmail1" placeholder="0">
                </div>
            </div>
            
            <div class="form-group">
                <button class="btn btn-block btn-primary" name="submit">Tambah Produk</button>
            </div>
        </form>
    </div>
</div>

<?php
    include_once("../koneksi/koneksi.php");
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
		$name = $_POST['NamaProduk'];
		$harga = $_POST['Harga'];
        $stok = $_POST['Stok'];
        
		
		// Insert user data into table
		$result = mysqli_query($con, "INSERT INTO produk (ProdukID, NamaProduk, Harga, Stok) VALUES('$id', '$name', '$harga', '$stok')");
		
		// Show message when user added
		echo "<script>alert('Product added successfully.')</script>";
        header("Location: index.php?page=stok");
	} 


?>