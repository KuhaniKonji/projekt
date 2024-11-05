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
    <?php
     $res_uciteljevi_podatki=mysqli_query($con, $sql_uciteljevi_podatki);
    while ($row_uciteljevi_podatki=mysqli_fetch_array($res_uciteljevi_podatki)) {
      $sql_uciteljevi_podatki_count_predmeti_ucitelja="SELECT COUNT(id_predmeta) from ucitelj_predmet
      WHERE ucitelj_predmet.id_ucitelja='$id_ucitelja'";
      $res_uciteljevi_podatki_count_predmeti_ucitelja=mysqli_query($con, $sql_uciteljevi_podatki_count_predmeti_ucitelja);
      $row_uciteljevi_podatki_count_predmeti_ucitelja=mysqli_fetch_array($res_uciteljevi_podatki_count_predmeti_ucitelja);
     ?>
    <tr>
      <td><a href="ucitelj.php?id_ucitelja=<?php echo $row_uciteljevi_podatki['id_ucitelja']; ?>"><?php echo $row_uciteljevi_podatki['ime_ucitelja'] . " " . $row_uciteljevi_podatki['priimek_ucitelja']; ?></a></td>
      <td><?php echo $row_uciteljevi_podatki['email']; ?></td>
      <td><?php echo $row_uciteljevi_podatki['telefon']; ?></td>
      <td><?php echo $row_uciteljevi_podatki_count_predmeti_ucitelja['COUNT(id_predmeta)']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
