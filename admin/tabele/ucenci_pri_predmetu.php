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

<tr>
    <form action="#" method="post" onsubmit="preveri(event)">
        <?php

        $id_ucenca=$id_ucenca+1;
        ?>
        <input type="hidden" value="<?php echo $id_ucenca; ?>" name="id_ucenca">
        <td><input type="text" name="ime_ucenca"> </td>
        <td><input type="text" name="priimek_ucenca"> </td>
        <td><input type="email" name="email"> </td>
        <td><input type="text" name="geslo"></td>
        <td><input type="date" name="datum_registracije"></td>
        <td><input type="submit" name="dodaj_ucenca" value="Dodaj" id="1"> </td>
        </form>
      </tr>
  </tbody>
  </table>


</div>
 
  </tbody>
  </table>
</div>

<script>
  function preveri(event) {
  
    var ime = document.getElementsByName('ime_ucenca')[0].value;
    var priimek = document.getElementsByName('priimek_ucenca')[0].value;
    var email = document.getElementsByName('email')[0].value;
    var geslo = document.getElementsByName('geslo')[0].value;
    var datum = document.getElementsByName('datum_registracije')[0].value;

    if (ime === "" || priimek === "" || email === "" || geslo === "" || datum === "") {
      alert("Vsa polja morajo biti izpolnjena!");
      event.preventDefault(); 
    }
  }
</script>





