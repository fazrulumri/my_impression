<?php
include "koneksi.php";
$sql = "SELECT * FROM tb_album";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3> Daftar Album</h3>
  <table>
      <tr>
          <th>ID ALBUM</th>
          <th>NAMA</th>
          <th>TEXT</th>
          <th>ID PHOTO</th>
        </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['id_album'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['text'] ?></td>
            <td><?php echo $row['id_photo'] ?></td>
            <td>
            <a href="index.php?delete=<?php echo $row['id_album'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>
        