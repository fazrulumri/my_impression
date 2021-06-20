<?php
include "koneksi.php";
$sql = "SELECT * FROM tb_post";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3> DAFTAR POSTINGGAN </h3>
  <table>
      <tr>
          <th>ID POST</th>
          <th>TANGGAL</th>
          <th>SLUG</th>
          <th>JUDUL</th>
          <th>TEXT</th>
          <th>ID KATEGORI</th>
        </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['id_post'] ?></td>
            <td><?php echo $row['tanggal'] ?></td>
            <td><?php echo $row['slug'] ?></td>
            <td><?php echo $row['judul'] ?></td>
            <td><?php echo $row['text'] ?></td>
            <td><?php echo $row['id_kategori'] ?></td>
            <td>
            <a href="index.php?delete=<?php echo $row['id_post'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>
        