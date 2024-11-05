<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime učitelja</th>
      <th>Email</th>
      <th>Telefon</th>
      <th>Št. predmetov</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_ucitelji_pri_predmetu=mysqli_fetch_array($res_ucitelji_pri_predmetu)) {
      $id_ucitelja=$row_ucitelji_pri_predmetu['id_ucitelja'];
      $sql_ucitelji_pri_predmetu_count_predmeti_ucitelja="SELECT COUNT(id_predmeta) from ucitelj_predmet
      WHERE ucitelj_predmet.id_ucitelja='$id_ucitelja'";
      $res_ucitelji_pri_predmetu_count_predmeti_ucitelja=mysqli_query($con, $sql_ucitelji_pri_predmetu_count_predmeti_ucitelja);
      $row_ucitelji_pri_predmetu_count_predmeti_ucitelja=mysqli_fetch_array($res_ucitelji_pri_predmetu_count_predmeti_ucitelja);
      // code...
     ?>
    <tr>
      <td><a href="ucitelj.php?id_ucitelja=<?php echo $row_ucitelji_pri_predmetu['id_ucitelja']; ?>"><?php echo $row_ucitelji_pri_predmetu['ime_ucitelja'] . " " . $row_ucitelji_pri_predmetu['priimek_ucitelja'] ?></a></td>
      <td><?php echo $row_ucitelji_pri_predmetu['email']; ?></td>
      <td><?php echo $row_ucitelji_pri_predmetu['telefon']; ?></td>
      <td><?php echo $row_ucitelji_pri_predmetu_count_predmeti_ucitelja['COUNT(id_predmeta)']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
