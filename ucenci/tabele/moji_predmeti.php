<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime predmeta</th>
      <th>Učitelj</th>
      <th>Št. nalog</th>
      <th>Št. oddanih nalog</th>
      <th>Odjava</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_moji_predmeti=mysqli_fetch_array($res_moji_predmeti)) {
      $id_predmeta=$row_moji_predmeti['id_predmeta'];
      $sql_moji_predmeti_count_naloge="SELECT COUNT(id_naloge) from naloge
      WHERE naloge.id_predmeta='$id_predmeta'";
      $res_moji_predmeti_count_naloge=mysqli_query($con, $sql_moji_predmeti_count_naloge);
      $row_moji_predmeti_count_naloge=mysqli_fetch_array($res_moji_predmeti_count_naloge);
      $sql_moji_predmeti_count_oddane_naloge="SELECT COUNT(id_oddane_naloge) from oddane_naloge, naloge
      WHERE oddane_naloge.id_ucenca='$id_ucenca'
      and oddane_naloge.id_naloge=naloge.id_naloge
      and naloge.id_predmeta='$id_predmeta'";
      $res_moji_predmeti_count_oddane_naloge=mysqli_query($con, $sql_moji_predmeti_count_oddane_naloge);
      $row_moji_predmeti_count_oddane_naloge=mysqli_fetch_array($res_moji_predmeti_count_oddane_naloge);
      // code...
     ?>
    <tr>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_moji_predmeti['id_predmeta'] ?>"><?php echo $row_moji_predmeti['ime_predmeta'] . " " . $row_moji_predmeti['letnik']; ?></a></td>
      <td><a href="ucitelj.php?id_ucitelja=<?php echo $row_moji_predmeti['id_ucitelja'] ?>"><?php echo $row_moji_predmeti['ime_ucitelja'] . " " . $row_moji_predmeti['priimek_ucitelja']; ?></a></td>
      <td><?php echo $row_moji_predmeti_count_naloge['COUNT(id_naloge)'] ?></td>
      <td><?php echo $row_moji_predmeti_count_oddane_naloge['COUNT(id_oddane_naloge)'] ?></td>
      <td><a href="odjava_od_predmeta.php?id_predmeta=<?php echo $row_moji_predmeti['id_predmeta'] ?>">Odjava</a></td>
    </tr>
  <?php } ?>

  </tbody>
</table>
