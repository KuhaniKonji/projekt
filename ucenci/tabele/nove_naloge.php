<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime naloge</th>
      <th>Predmet</th>
      <th>Rok za oddajo</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_nove_naloge=mysqli_fetch_array($res_nove_naloge)) {
      // code...
     ?>
    <tr>
      <td><a href="naloga.php?id_naloge=<?php echo $row_nove_naloge['id_naloge'] ?>">
        <?php echo $row_nove_naloge['ime_naloge'] ?>
      </a></td>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_nove_naloge['id_predmeta'] ?>"><?php echo $row_nove_naloge['ime_predmeta'] . " " . $row_nove_naloge['letnik'] ?></a></td>
      <td><?php echo $row_nove_naloge['rok_za_oddajo'] ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
