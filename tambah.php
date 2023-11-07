<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'koneksi.php';
    ?>
    
    <h3 style="padding-left:30px;  padding-top:10px; padding-bottom:10px">Tambah Data Customer</h3>

    <form action="proses_tambah.php" method="post" enctype="multipart/form-data" style="padding-left:30px">
        <label class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control" style="width:98%">
        
        <label class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-control" style="width:98%">
        
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" style="width:98%">
        
        <label class="form-label">Telepon</label>
        <input type="text" name="phone" class="form-control" style="width:98%">
        
        <label class="form-label">Alamat</label>
        <input type="text" name="address" class="form-control" style="width:98%">
        
        <button class="btn btn-primary" type="submit" name="submit"  style="margin-top:15px"> Simpan </button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>