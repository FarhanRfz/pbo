<h2>Kampus</h2>

<a href="<?php echo URL; ?>/kampus/input" class="btn">Input Kampus</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>KODE POS</th>
            <th>AKREDITASI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['kode_pos']; ?></td>
                  <td><?php echo $row['akreditasi']; ?></td>
                  <td><a href="<?php echo URL; ?>/kampus/edit/<?php echo $row['kampus_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/kampus/delete/<?php echo $row['kampus_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>