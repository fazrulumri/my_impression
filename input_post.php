<!DOCTYPE html>
<html>
    <head>
        <title>INPUT POST</title>
    </head>
    <body>
        <form method="post" action="index_admin.php">
            <table>
                <tr>
                    <td>ID POST</td>
                    <td><input type="text" name="id_post"></td>
                </tr>
                
                <tr>
                    <td>TANGGAL</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                
                <tr>
                    <td>SLUG</td>
                    <td><input type="text" name="slug"></td>
                </tr>
                
                <tr>
                    <td>JUDUL</td>
                    <td><input type="text" name="judul"></td>
                </tr>
                
                <tr>
                    <td>TEXT</td>
                    <td><input type="text" name="text"></td>
                </tr>
                
                <tr>
                    <td>ID KATEGORI</td>
                    <td><input type="text" name="id_kategori"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>