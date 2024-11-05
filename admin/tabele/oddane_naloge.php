<div class="box-100">
  <h2>Oddane naloge</h2>
  <table  class="table" align="center">
      <thead>
        <tr>
          <th>Id</th>
          <th>Ime predmeta</th>
          <th>Ime naloge</th>
          <th>Učenec</th>
          <th>Naloga</th>
          <th>Datum oddaje</th>
          <th>Izbriši</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $res_oddane_naloge=mysqli_query($con, "SELECT * FROM ucenci, oddane_naloge, naloge, predmeti where oddane_naloge.id_ucenca=ucenci.id_ucenca and oddane_naloge.id_naloge=naloge.id_naloge and naloge.id_predmeta=predmeti.id_predmeta ORDER BY naloge.id_naloge ASC ");
  while($row_oddane_naloge=mysqli_fetch_array($res_oddane_naloge)){
    ?>
      <tr>
        <td><?php echo $row_oddane_naloge['id_oddane_naloge'];
        $id_oddane_naloge=$row_oddane_naloge['id_oddane_naloge']; ?></td>
        <td><?php echo $row_oddane_naloge['ime_predmeta'] . " " . $row_oddane_naloge['letnik']; ?></td>
        <td><?php echo $row_oddane_naloge['ime_naloge']; ?></td>
        <td><?php echo $row_oddane_naloge['ime']. " " . $row_oddane_naloge['priimek']; ?></td>
        <td><?php echo $row_oddane_naloge['naloga']; ?></td>
        <td><?php echo $row_oddane_naloge['datum_oddaje']; ?></td>
        <td><form action="#" method="post"><input type="hidden" name="id_oddane_naloge" value="<?php echo $row_oddane_naloge['id_oddane_naloge']; ?>"><input type="submit" name="izbris_oddane_naloge" value="Izbriši"></form></td>
      </tr>
    <?php
  } ?>

  </tbody>
  </table>


</div>
