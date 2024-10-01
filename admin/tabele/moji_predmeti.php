<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime predmeta</th>
      <th>Št. nalog</th>
      <th>Št. učencev</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $res_moji_predmeti=mysqli_query($con, "SELECT * FROM predmeti");
    while ($row_moji_predmeti=mysqli_fetch_array($res_moji_predmeti)) {
      $id_predmeta=$row_moji_predmeti['id_predmeta'];
      $sql_moji_predmeti_count_naloge="SELECT COUNT(id_naloge) from naloge
      WHERE naloge.id_predmeta='$id_predmeta'";
      $res_moji_predmeti_count_naloge=mysqli_query($con, $sql_moji_predmeti_count_naloge);
      $row_moji_predmeti_count_naloge=mysqli_fetch_array($res_moji_predmeti_count_naloge);
      $sql_moji_predmeti_count_st_ucencev="SELECT COUNT(id_ucenca) from ucenec_predmet
      WHERE ucenec_predmet.id_predmeta='$id_predmeta'";
      $res_moji_predmeti_count_st_ucencev=mysqli_query($con, $sql_moji_predmeti_count_st_ucencev);
      $row_moji_predmeti_count_st_ucencev=mysqli_fetch_array($res_moji_predmeti_count_st_ucencev);
      
     ?>
    <tr>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_moji_predmeti['id_predmeta'] ?>"><?php echo $row_moji_predmeti['ime_predmeta'] . " " . $row_moji_predmeti['letnik']; ?></a></td>
      <td><?php echo $row_moji_predmeti_count_naloge['COUNT(id_naloge)'] ?></td>
      <td><?php echo $row_moji_predmeti_count_st_ucencev['COUNT(id_ucenca)'] ?></td>
    </tr>
  <?php } ?>

  </tbody>
</table>
