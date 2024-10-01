<?php
$sql_naloge_pri_predmetu="select * from naloge 
where id_predmeta='$id_predmeta'";
$res_naloge_pri_predmetu=mysqli_query($con, $sql_naloge_pri_predmetu);

if (isset($_POST['izbris'])) {
  $id_naloge=$_POST['id_naloge'];
  mysqli_query($con, "delete from naloge where id_naloge='$id_naloge'");
  header("location:index.php");
}
 ?>
 

<table class="table" align="center">
  <thead>
    <tr>
      <th>Ime ucenca</th>
      <th>Št. oddanih nalog</th>
      <th>Izbriši nalogo</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row_naloge_pri_predmetu=mysqli_fetch_array($res_naloge_pri_predmetu)) {
      
    ?>
    <tr>
      <td><?php echo $row_naloge_pri_predmetu['ime_naloge'];
      $id_naloge=$row_naloge_pri_predmetu['id_naloge'];
      $res_count=mysqli_query($con, "SELECT COUNT(oddane_naloge.id_oddane_naloge) from oddane_naloge, naloge  WHERE  oddane_naloge.id_naloge=naloge.id_naloge and naloge.id_naloge='$id_naloge'");
      $row_count=mysqli_fetch_array($res_count); ?></td>
      <td> <?php
      echo $row_count['COUNT(oddane_naloge.id_oddane_naloge)']; ?></td>
      <td><form action="#" method="post">
        <input type="hidden" name="id_naloge" value="<?php echo $id_naloge; ?>"><input type="submit" name="izbris" value="Izbriši">
      </form></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
