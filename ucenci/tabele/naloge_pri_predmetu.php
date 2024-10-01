<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime naloge</th>
      <th>Rok za oddajo</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_naloge_pri_predmetu=mysqli_fetch_array($res_naloge_pri_predmetu)) {
      // code...
     ?>
    <tr>
      <td><a href="naloga.php?id_naloge=<?php echo $row_naloge_pri_predmetu['id_naloge'] ?>"><?php echo $row_naloge_pri_predmetu['ime_naloge'] ?></a></td>
      <td><?php echo $row_naloge_pri_predmetu['rok_za_oddajo'] ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
