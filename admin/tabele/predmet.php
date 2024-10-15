<div class="box-100">
  <h2>Predmeti</h2>
  <table  class="table" align="center">
      <thead>
        <tr>
          <th>Id</th>
          <th>Ime predmeta</th>
          <th>Letnik</th>
          <th>Učitelj</th>
          <th>Okrajšava</th>
          <th>Izbriši</th>
        </tr>
      </thead>
      <tbody>
  <?php
  $respredmeti=mysqli_query($con, "SELECT * FROM predmeti");
  while($rowpredmeti=mysqli_fetch_array($respredmeti)){
    ?>
      <tr>
        <td><?php echo $rowpredmeti['id_predmeta'];
        $id_predmeta=$rowpredmeti['id_predmeta']; ?></td>
        <td><?php echo $rowpredmeti['ime_predmeta']; ?></td>
        <td><?php echo $rowpredmeti['letnik']; ?></td>
        <td><?php $res=mysqli_query($con, "select * from ucitelj_predmet, ucitelji where ucitelji.id_ucitelja=ucitelj_predmet.id_ucitelja and ucitelj_predmet.id_predmeta='$id_predmeta'");
        while ($row=mysqli_fetch_array($res)) {
         

        echo $row['ime_ucitelja']. " " . $row['priimek_ucitelja'] . "<br>"; }?></td>
        <td><?php echo $rowpredmeti['okrajsava']; ?></td>
        <td><form action="#" method="post">
        <input type="hidden" name="id_predmeta" value="<?php echo $rowpredmeti['id_predmeta']; ?>">
        <input type="submit" name="izbris_predmeta" value="Izbriši">
      </form></td>
      </tr>
    <?php
  } ?>
  <tr>
    <form action="#" method="post">
        <td><?php

        $id_predmeta=$id_predmeta+1;
        echo $id_predmeta; ?>
        <input type="hidden" value="<?php echo $id_predmeta; ?>" name="id_predmeta"></td>
        <td> <input type="text" name="ime_predmeta" required> </td>
        <td> <input type="number"min="1" max="4" name="letnik" required> </td>
        <td> <select name="id_ucitelja"><?php $res=mysqli_query($con, "select * from ucitelji");
        while ($row=mysqli_fetch_array($res)) {
          echo "<option value='". $row['id_ucitelja'] ."'>" . $row['ime_ucitelja'] . " " . $row['priimek_ucitelja'] . "</option>";
        }  ?></select></td>
        <td><input type="text" name="okrajsava" required></td>
        <td><input type="submit" name="razpis_predmeta" value="Dodaj"> </td>
        </form>
      </tr>
  </tbody>
  </table>


</div>
