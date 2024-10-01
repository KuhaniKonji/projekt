<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime naloge</th>
      <th>Predmet</th>
      <th>Rok za oddajo</th>
      <th>Datum oddaje</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_oddane_naloge=mysqli_fetch_array($res_oddane_naloge)) {
      // code...
     ?>
    <tr>
      <td><a href="naloga.php?id_naloge=<?php echo $row_oddane_naloge['id_naloge']; ?>"><?php echo $row_oddane_naloge['ime_naloge']; ?></a></td>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_oddane_naloge['id_predmeta']; ?>"><?php echo $row_oddane_naloge['ime_predmeta'] . " " . $row_oddane_naloge['letnik']; ?></a></td>
      <td><?php echo $row_oddane_naloge['rok_za_oddajo']; ?></td>
      <td><?php echo $row_oddane_naloge['datum_oddaje']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
