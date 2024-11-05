<div class="box-100">
  <h2>Ocenjene naloge</h2>
  <table  class="table" align="center">
      <thead>
        <tr>
          <th>Id</th>
          <th>Ime predmeta</th>
          <th>Ime naloge</th>
          <th>Učenec</th>
          <th>Naloga</th>
          <th>Datum ocene</th>
          <th>Ocena</th>
          <th>Izbriši</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $res_ocenjene_naloge=mysqli_query($con, "SELECT * FROM ocenjene_naloge, ucenci, oddane_naloge, naloge, predmeti where ocenjene_naloge.id_oddane_naloge=oddane_naloge.id_oddane_naloge and oddane_naloge.id_ucenca=ucenci.id_ucenca and oddane_naloge.id_naloge=naloge.id_naloge and naloge.id_predmeta=predmeti.id_predmeta ORDER BY naloge.id_naloge ASC;  ");
  while($row_ocenjene_naloge=mysqli_fetch_array($res_ocenjene_naloge)){
    ?>
      <tr>
        <td><?php echo $row_ocenjene_naloge['id_ocenjene_naloge'];
        $id_ocenjene_naloge=$row_ocenjene_naloge['id_ocenjene_naloge']; ?></td>
        <td><?php echo $row_ocenjene_naloge['ime_predmeta'] . " " . $row_ocenjene_naloge['letnik']; ?></td>
        <td><?php echo $row_ocenjene_naloge['ime_naloge']; ?></td>
        <td><?php echo $row_ocenjene_naloge['ime']. " " . $row_ocenjene_naloge['priimek']; ?></td>
        <td><?php echo $row_ocenjene_naloge['naloga']; ?></td>
        <td><?php echo $row_ocenjene_naloge['datum']; ?></td>
        <td><?php echo $row_ocenjene_naloge['ocena']; ?></td>
        <td><form action="#" method="post"><input type="hidden" name="id_ocenjene_naloge" value="<?php echo $row_ocenjene_naloge['id_ocenjene_naloge']; ?>"><input type="submit" name="izbris_ocenjene_naloge" value="Izbriši"></form></td>
      </tr>
    <?php
  } ?>

  </tbody>
  </table>




 
</div>
