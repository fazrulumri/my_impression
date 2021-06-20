<!DOCTYPE html>
<html>
    <head>
        <title>INPUT KATEGORI</title>
    </head>
    <body>
        <form method="post" action="index_admin.php">
            <table>
                <tr>
                    <td>ID KATEGORI</td>
                    <td><input type="text" name="id_kategori"></td>
                </tr>
                
                <tr>
                    <td>NAMA</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                
                <tr>
                    <td>TEXT</td>
                    <td><input type="text" name="text"></td>
                </tr>
                
                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
        
        <?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$id_kategori = $_POST['id_kategori'];
                    $nama = $_POST['nama'];
					$text = $_POST['text'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into tb_kategori (id_kategori,nama,text)values('$id_kategori','$nama','$text')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='index_admin.php';</script>";
				}
				?>
    </body>
</html>