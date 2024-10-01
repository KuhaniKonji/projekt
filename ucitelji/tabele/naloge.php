<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime naloge</th>
      <th>Predmet</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_naloge=mysqli_fetch_array($res_naloge)) {
      
    ?>
    <tr>
      <td><?php echo $row_naloge['ime_naloge']; ?></td>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_naloge['id_predmeta'] ?>"><?php echo $row_naloge['ime_predmeta'] . " " . $row_naloge['letnik']; ?></a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
