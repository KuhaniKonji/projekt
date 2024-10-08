<div class="box-100">
  <h2>Ucenci</h2>
  <table  class="table" align="center">
      <thead>
        <tr>
          <th>Ime Učitelja</th>
          <th>Priimek Učitelja</th>
          <th>Email</th>
          <th>Geslo</th>
          <th>Datum Registracije</th>
          <th>Izbriši/Dodaj</th>
        </tr>

      </thead>

      <tbody>
  <?php
  $resucenci=mysqli_query($con, "SELECT * FROM ucenci");
  while($rowucenci=mysqli_fetch_array($resucenci)){
    ?>
      <tr>
        <td><?php echo $rowucenci['ime'] ;
        $id_ucenca=$rowucenci['id_ucenca']; ?></td>
        <td><?php echo $rowucenci['priimek']; ?></td>
        <td><?php echo$rowucenci['email']; ?></td>
        <td><?php echo $rowucenci['geslo']; ?></td>
        <td><?php echo $rowucenci['datum_registracije']; ?></td>
        <td><form action="#" method="post">
        <input type="hidden" name="id_ucenca" value="<?php echo $rowucenci['id_ucenca']; ?>">
        <input type="submit" name="izbris_ucenca" value="Izbriši">
      </form></td>
      </tr>
    <?php
  } ?>
  
 
  </tbody>
  </table>


</div>
