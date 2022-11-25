<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pinjam buku</title>
<head>
  <style type="text/css">
    
    header h2 {
      font-size: 30px;
      margin-top: 50px;
      text-align: center;
    }

    main  {
      font-size: 15px;
      float: left;
      margin-top: 15px;
      margin-left: 20px;
    }

    main a {
      text-decoration: none;
      color: indianred;
      font-size: 20px;
    }

    thead {
      background-color: #F2DEBA;
    }

    .table {
        font-family: sans-serif;
        color: #232323;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .table, thead th, tr td {
      border: 1px solid #999;
      padding: 15px 25px;
    }



  </style>
</head>

<!-- script php select -->
<?php 
  // include koneksi
  include("koneksi.php");


  // query select
  $select = "SELECT * FROM buku";
  $result = mysqli_query($con, $select); 

 ?>
<body>
  <?php include 'sidebar.php' ?>
 <header>
    <h2>DATA BUKU</h2>
  </header>

  <main>
    <table class="table">
      <thead>
        <th>kode buku</th>
        <th>Judul buku</th>
        <th>Penerbit</th>
      </thead>

  <!-- script php select -->

        <?php 
          // ini kondisi result cuy
          while ($row = mysqli_fetch_assoc($result)){
        ?>
        <!-- entar  -->
         <tr>
          <td><?php echo $row['id_buku']; ?></td>
           <td><?php echo $row['judul']; ?></td>
           <td><?php echo $row['penerbit']; ?></td>
           <td>
            <a href="form_pinjam_otomatis.php?id_buku=<?php echo $row['id_buku'];?>" role="button">pinjam</a>
            </td>
          <?php  ?>

           <?php  ?>
         </tr>

        <?php
          }
         mysqli_close($con); 
        ?>

        <p>total: <?php echo mysqli_num_rows($result) ?></p>
        <a href="index.php">Kembali</a>
  </main>
</body>
</html>