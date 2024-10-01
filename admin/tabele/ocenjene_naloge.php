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

<?php if (isset($_GET['uredi_nalogo'])) {
  ?>
  <tr>
    <form action="#" method="post">
        <td><?php
        $id_naloge=$_GET['uredi_nalogo'];
        echo $id_naloge; ?>
        <input type="hidden" value="<?php echo $id_naloge; ?>" name="id_naloge"></td>
        <td><select name="value" required>
  <?php
  $res_naloga=mysqli_query($con, "SELECT * FROM naloge, predmeti where naloge.id_predmeta=predmeti.id_predmeta and naloge.id_naloge='$id_naloge' ORDER BY naloge.id_naloge ASC ");
  $row_naloga=mysqli_fetch_array($res_naloga);

  $sql_razpis = "SELECT * FROM predmeti ";
$result_razpis = mysqli_query($con, $sql_razpis);
$sql_predmet = "SELECT * FROM predmeti, naloge where naloge.id_predmeta=predmeti.id_predmeta and naloge.id_naloge='$id_naloge' ";
$result_predmet = mysqli_query($con, $sql_predmet);
$row_predmet=mysqli_fetch_array($result_predmet);
$id_predmeta=$row_predmet['id_predmeta'];
echo "<option value='$id_predmeta'>" . $row_predmet['ime_predmeta'] . " " . $row_predmet['letnik'] . "</option>";
while ($row_razpis=mysqli_fetch_array($result_razpis))
{
$id_predmeta=$row_razpis['id_predmeta'];
echo "<option value='$id_predmeta'>" . $row_razpis['ime_predmeta'] . " " . $row_razpis['letnik'] . "</option>";
}
   ?>
 </select></td>
        <td><input type="text" name="ime_naloge" value="<?php echo $row_naloga['ime_naloge']; ?>"></td>
        <td><input type="text" name="navodilo" value="<?php echo $row_naloga['navodilo']; ?>"></td>
        <td>Trenutni datum</td>
        <td><input type="date" name="rok_za_oddajo" value="<?php echo $row_naloga['rok_za_oddajo']; ?>" required></td>
        <td><input type="submit" name="edit_naloge" value="Uredi"> </td>
        </form>
      </tr>

  <?php
  // code...
} ?>
</div>
