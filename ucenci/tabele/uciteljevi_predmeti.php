<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime predmeta</th>
      <th>Št. vpisanih</th>
      <th>Prijava</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_uciteljevi_predmeti=mysqli_fetch_array($res_uciteljevi_predmeti)) {
      $id_predmeta=$row_uciteljevi_predmeti['id_predmeta'];
      $sql_count_st_vpisanih="select COUNT(id_ucenca) from ucenec_predmet where id_predmeta='$id_predmeta'";
      $res_count_st_vpisanih=mysqli_query($con, $sql_count_st_vpisanih);
      $row_count_st_vpisanih=mysqli_fetch_array($res_count_st_vpisanih);
      // code...
     ?>
    <tr>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_uciteljevi_predmeti['id_predmeta']; ?>"><?php echo $row_uciteljevi_predmeti['ime_predmeta'] . " " . $row_uciteljevi_predmeti['letnik']; ?></a></td>
      <td><?php echo $row_count_st_vpisanih['COUNT(id_ucenca)']; ?></td>
      <td><?php $sql_prijavljen="select * from ucenec_predmet where id_ucenca='$id_ucenca' and id_predmeta='$id_predmeta'";
      $res_prijavljen=mysqli_query($con, $sql_prijavljen);
      $count_prijavljen=mysqli_num_rows($res_prijavljen);
      if ($count_prijavljen!=0) {

       ?>
     <a href="odjava_od_predmeta.php?id_predmeta=<?php echo $row_uciteljevi_predmeti['id_predmeta']; ?>">Odjava</a></td>
   <?php }else {
     ?>
     <a href="prijava_k_predmetu.php?id_predmeta=<?php echo $row_uciteljevi_predmeti['id_predmeta']; ?>">Prijava</a></td>
     <?php
   } ?>
    </tr>
  <?php } ?>
  </tbody>
</table>
