<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime naloge</th>
      <th>Predmet</th>
      <th>Datum oddaje</th>
      <th>Datum ocene</th>
      <th>Ocena</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_ocenjene_naloge=mysqli_fetch_array($res_ocenjene_naloge)) {
      // code...
     ?>
    <tr>
      <td><a href="naloga.php?id_naloge=<?php echo $row_ocenjene_naloge['id_naloge']; ?>"><?php echo $row_ocenjene_naloge['ime_naloge']; ?></a></td>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_ocenjene_naloge['id_predmeta']; ?>"><?php echo $row_ocenjene_naloge['ime_predmeta'] . " " . $row_ocenjene_naloge['letnik']; ?></a></td>
      <td><?php echo $row_ocenjene_naloge['datum_oddaje']; ?></td>
      <td><?php echo $row_ocenjene_naloge['datum']; ?></td>
      <td><?php echo $row_ocenjene_naloge['ocena']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
