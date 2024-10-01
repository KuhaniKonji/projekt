<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime učenca</th>
      <th>Ime naloge</th>
      <th>Predmet</th>
      <th>Naloga</th>
      <th>Ocena</th>
      <th>Datum</th>
    </tr>
  </thead>
  <tbody>
    <?php
 $res_nazadnje_ocenjeno=mysqli_query($con, "SELECT * FROM ocenjene_naloge, ucenci, oddane_naloge, naloge, predmeti where ocenjene_naloge.id_oddane_naloge=oddane_naloge.id_oddane_naloge and oddane_naloge.id_ucenca=ucenci.id_ucenca and oddane_naloge.id_naloge=naloge.id_naloge and naloge.id_predmeta=predmeti.id_predmeta ORDER BY ocenjene_naloge.datum DESC;  ");
    while ($row_nazadnje_ocenjeno=mysqli_fetch_array($res_nazadnje_ocenjeno)) {
      $id_oddane_naloge=$row_nazadnje_ocenjeno['id_oddane_naloge'];
      
    ?>
    <tr>
      <td><?php echo $row_nazadnje_ocenjeno['ime'] . " " . $row_nazadnje_ocenjeno['priimek']; ?></td>
      <td><?php echo $row_nazadnje_ocenjeno['ime_naloge']; ?></td>
      <td><a href="predmet.php?id_predmeta=<?php echo $row_nazadnje_ocenjeno['id_predmeta'] ?>"><?php echo $row_nazadnje_ocenjeno['ime_predmeta'] . " " . $row_nazadnje_ocenjeno['letnik']; ?></a></td>
      <td><a href="<?php echo $row_oceni_nalogo['naloga']; ?>" download> Naloga</td>
      <td><?php echo $row_nazadnje_ocenjeno['ocena']; ?></td>
      <td><?php echo $row_nazadnje_ocenjeno['datum']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
