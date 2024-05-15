<!DOCTYPE html>
<html>
<head>
<title>Barang</title>
</head>
<body>
<header>
<h3>Barang</h3>
</header>
<form action="proses-pendaftaran.php" method="POST">
<fieldset>
<p>
<label for="jumlah">jumlah: </label>
<input type="text" name="jumlah" placeholder="jumlah" />
</p>
<p>
<label for="tipe">tipe: </label>
<textarea name="tipe"></textarea>
</p>
<p>
<label for="warna">warna: </label>
<select name="warna">
<option>merah</option>
<option>biru</option>
<option>kuning</option>
<option>hitam</option>
<option>putih</option>
<option>hijau</option>
</select>
</p>
<p>
<label for="nama">nama: </label>
<input type="text" name="nama" placeholder="nama barang" />
</p>
<p>
<input type="submit" value="Daftar" name="daftar" />
</p>
</fieldset>
</form>
</body>
</html>