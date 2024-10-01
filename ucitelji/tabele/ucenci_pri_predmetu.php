<?php
$sql_ucenci_pri_predmetu="select * from ucenec_predmet, ucenci 
where ucenec_predmet.id_predmeta='$id_predmeta' 
and ucenec_predmet.id_ucenca=ucenci.id_ucenca";
$res_ucenci_pri_predmetu=mysqli_query($con, $sql_ucenci_pri_predmetu);

 ?>

<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime ucenca</th>
      <th>Št. oddanih nalog</th>
      <th>Ocene</th>
      <th>Povprečje</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_ucenci_pri_predmetu=mysqli_fetch_array($res_ucenci_pri_predmetu)) {
      
    ?>
    <tr>
      <td><?php echo $row_ucenci_pri_predmetu['ime'] . " " . $row_ucenci_pri_predmetu['priimek'];
      $id_ucenca=$row_ucenci_pri_predmetu['id_ucenca'];
      $res_count=mysqli_query($con, "SELECT COUNT(oddane_naloge.id_oddane_naloge) from oddane_naloge, naloge  WHERE oddane_naloge.id_ucenca='$id_ucenca' and oddane_naloge.id_naloge=naloge.id_naloge and naloge.id_predmeta='$id_predmeta'");
      $row_count=mysqli_fetch_array($res_count); ?></td>
      <td> <?php
      echo $row_count['COUNT(oddane_naloge.id_oddane_naloge)']; ?></td>
      <td> <?php
      $sql_redovalnica="SELECT * FROM oddane_naloge, naloge, ocenjene_naloge
      WHERE oddane_naloge.id_ucenca='$id_ucenca'
      and oddane_naloge.id_naloge=naloge.id_naloge
      and naloge.id_predmeta='$id_predmeta'
      and ocenjene_naloge.id_oddane_naloge=oddane_naloge.id_oddane_naloge";
      $res_redovalnica=mysqli_query($con, $sql_redovalnica);
      $sql_avg="SELECT AVG(ocenjene_naloge.ocena) FROM oddane_naloge, naloge, ocenjene_naloge
      WHERE oddane_naloge.id_ucenca='$id_ucenca'
      and oddane_naloge.id_naloge=naloge.id_naloge
      and naloge.id_predmeta='$id_predmeta'
      and ocenjene_naloge.id_oddane_naloge=oddane_naloge.id_oddane_naloge";
      $res_avg=mysqli_query($con, $sql_avg);
       while($row_redovalnica=mysqli_fetch_array($res_redovalnica)){
        echo $row_redovalnica['ocena'];
       } 
       ?></td>
      <td> <?php
      $row_avg=mysqli_fetch_array($res_avg);
      echo $row_avg['AVG(ocenjene_naloge.ocena)']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
