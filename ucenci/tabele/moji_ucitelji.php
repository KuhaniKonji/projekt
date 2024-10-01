<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime učitelja</th>
      <th>Email</th>
      <th>Št. predmetov</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row_moji_ucitelji=mysqli_fetch_array($res_moji_ucitelji)) {
      $id_ucitelja=$row_moji_ucitelji['id_ucitelja'];
      $sql_moji_ucitelji_count_predmeti_ucitelja="SELECT COUNT(id_predmeta) from ucitelj_predmet
      WHERE ucitelj_predmet.id_ucitelja='$id_ucitelja'";
      $res_moji_ucitelji_count_predmeti_ucitelja=mysqli_query($con, $sql_moji_ucitelji_count_predmeti_ucitelja);
      $row_moji_ucitelji_count_predmeti_ucitelja=mysqli_fetch_array($res_moji_ucitelji_count_predmeti_ucitelja);
      // code...
     ?>
    <tr>
      <td><a href="ucitelj.php?id_ucitelja=<?php echo $row_moji_ucitelji['id_ucitelja']; ?>"><?php echo $row_moji_ucitelji['ime_ucitelja'] . " " . $row_moji_ucitelji['priimek_ucitelja']; ?></a></td>
      <td><?php echo $row_moji_ucitelji['email']; ?></td>
      <td><?php echo $row_moji_ucitelji_count_predmeti_ucitelja['COUNT(id_predmeta)']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
