<?php
include "koneksi.php";
$sql = "SELECT * FROM tb_photo";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3> DAFTAR PHOTO </h3>
  <table>
      <tr>
          <th>ID PHOTO</th>
          <th>TANGGAL</th>
          <th>JUDUL</th>
          <th>TEXT</th>
          <th>ID POST</th>
        </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['id_photo'] ?></td>
            <td><?php echo $row['tanggal'] ?></td>
            <td><?php echo $row['judul'] ?></td>
            <td><?php echo $row['text'] ?></td>
            <td><?php echo $row['id_post'] ?></td>
            <td>
            <a href="index.php?delete=<?php echo $row['id_photo'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>
        