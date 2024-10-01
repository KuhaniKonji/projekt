<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime naloge</th>
      <th>Predmet</th>
      <th>Oddaja</th>
      <th>Ocena</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_nove_ocene=mysqli_fetch_array($res_nove_ocene)) {
      // code...
     ?>
    <tr>
      <td><a href="naloga.php?id_naloge=<?php echo $row_nove_ocene['id_naloge']; ?>"><?php echo $row_nove_ocene['ime_naloge'] ?></a></td>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_nove_ocene['id_predmeta']; ?>"><?php echo $row_nove_ocene['ime_predmeta'] . " " . $row_nove_ocene['letnik']; ?></a></td>
      <td><?php echo $row_nove_ocene['datum'] ?></td>
      <td><?php echo $row_nove_ocene['ocena'] ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
