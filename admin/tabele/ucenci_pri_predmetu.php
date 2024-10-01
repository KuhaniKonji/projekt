<?php
$sql_ucenci_pri_predmetu="select * from  ucenci";
$res_ucenci_pri_predmetu=mysqli_query($con, $sql_ucenci_pri_predmetu);

 ?>

<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime ucenca</th>
      <th>Email</th>
      <th>Datum Registracije</th>
      
    </tr>
  </thead>
  <tbody>
    <?php while ($row_ucenci_pri_predmetu=mysqli_fetch_array($res_ucenci_pri_predmetu)) {
      
    ?>
    <tr>
      <td><?php echo $row_ucenci_pri_predmetu['ime'] . " " . $row_ucenci_pri_predmetu['priimek']; ?></td>
      <td> <?php
       echo $row_ucenci_pri_predmetu['email']; ?></td>
      <td> <?php
     echo $row_ucenci_pri_predmetu['datum_registracije'];
       ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
