<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime učenca</th>
      <th>Ime naloge</th>
      <th>Predmet</th>
      <th>Naloga</th>
      <th>Ocena</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_nazadnje_ocenjeno=mysqli_fetch_array($res_nazadnje_ocenjeno)) {
      $id_oddane_naloge=$row_nazadnje_ocenjeno['id_oddane_naloge'];
      // code...
    ?>
    <tr>
      <td><?php echo $row_nazadnje_ocenjeno['ime'] . " " . $row_nazadnje_ocenjeno['priimek']; ?></td>
      <td><?php echo $row_nazadnje_ocenjeno['ime_naloge']; ?></td>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_nazadnje_ocenjeno['id_predmeta'] ?>"><?php echo $row_nazadnje_ocenjeno['ime_predmeta'] . " " . $row_nazadnje_ocenjeno['letnik']; ?></a></td>
      <td><a href="<?php echo $row_oceni_nalogo['naloga']; ?>" download> Naloga</td>
      <td><?php echo $row_nazadnje_ocenjeno['ocena']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
