<table class="table" align="center">
  <thead>
    <tr>
      <th>Predmet</th>
      <th>Ocene</th>
      <th>Povprečje</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_moji_predmeti=mysqli_fetch_array($res_moji_predmeti)) {
      $id_predmeta=$row_moji_predmeti['id_predmeta'];
      include("php/redovalnica.php");
      // code...
       ?>
    <tr>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_moji_predmeti['id_predmeta'] ?>"><?php echo $row_moji_predmeti['ime_predmeta'] . " " . $row_moji_predmeti['letnik']; ?></a></td>
      <td><?php while ($row_redovalnica=mysqli_fetch_array($res_redovalnica)) {
        echo $row_redovalnica['ocena'];
        // code...
      } ?></td>
      <td><?php $row_avg=mysqli_fetch_array($res_avg); echo $row_avg['AVG(ocenjene_naloge.ocena)']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
