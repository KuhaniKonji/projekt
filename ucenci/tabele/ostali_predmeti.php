<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime predmeta</th>
      <th>Učitelj</th>
      <th>Prijava</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_ostali_predmeti=mysqli_fetch_array($res_ostali_predmeti)) {
      // code...
     ?>
    <tr>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_ostali_predmeti['id_predmeta']; ?>"><?php echo $row_ostali_predmeti['ime_predmeta'] . " " . $row_ostali_predmeti['letnik']; ?></a></td>
      <td><a href="ucitelj.php?id_ucitelja=<?php echo $row_ostali_predmeti['id_ucitelja']; ?>"><?php echo $row_ostali_predmeti['ime_ucitelja'] . " " . $row_ostali_predmeti['priimek_ucitelja']; ?></a></td>
      <td><a href="prijava_k_predmetu.php?id_predmeta=<?php echo $row_ostali_predmeti['id_predmeta']; ?>">Prijava</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
