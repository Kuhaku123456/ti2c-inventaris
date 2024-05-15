<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="file.css">
</head>
<style>
    /* Gaya umum */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 0;
}

header {
    background-color: #007bff;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

nav {
    background-color: #f8f9fa;
    padding: 10px;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #007bff;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 20px;
}

a:hover {
    background-color: #0056b3;
}

p {
    text-align: center;
}

    </style>
<body>
     <header>
          <h3>Daftar Barang</h3>
     </header>

     <nav>
         <a href="form-daftar.php">[+] Tambah Baru</a>
     </nav>

     <br>

     <table border="1">
     <thead>
         <tr>
             <th>Jumlah</th>
             <th>Tipe</th>
             <th>Warna</th>
             <th>Nama</th>
         </tr>
     </thead>
     <tbody>


<?php
         $sql = "SELECT * FROM catatan";
         $query = mysqli_query($db, $sql);

         while($siswa = mysqli_fetch_array($query)){
             echo "<tr>";
             echo "<td>".$siswa['jumlah']."</td>";
             echo "<td>".$siswa['tipe']."</td>";
             echo "<td>".$siswa['warna']."</td>";
             echo "<td>".$siswa['nama']."</td>";
             echo "</td>";
             echo "</tr>";
         }
         ?>

     </tbody> 
     </table>
     <p>Total: <?php echo mysqli_num_rows($query) ?></p>
     </body>
</html>