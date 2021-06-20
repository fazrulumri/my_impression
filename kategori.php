<?php
include "koneksi.php";
$sql = "SELECT * FROM tb_kategori";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3>DAFTAR KATEGORI </h3>
  <table>
      <tr>
          <th>ID KATEGORI</th>
          <th>NAMA</th>
          <th>TEXT</th>
      </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['id_kategori'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['text'] ?></td> 
            <td>
            <a href="index.php?delete=<?php echo $row['id_kategori'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>
        
