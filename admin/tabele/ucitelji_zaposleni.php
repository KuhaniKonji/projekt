<div class="box-100">
  <h2>Učitelji</h2>
  <table  class="table" align="center">
      <thead>
        <tr>
          <th>Ime Učitelja</th>
          <th>Priimek Učitelja</th>
          <th>Email</th>
          <th>Geslo</th>
          <th>Izbriši/Dodaj</th>
        </tr>

      </thead>

      <tbody>
  <?php
  $resucitelji=mysqli_query($con, "SELECT * FROM ucitelji");
  while($rowucitelji=mysqli_fetch_array($resucitelji)){
    ?>
      <tr>
        <td><?php echo $rowucitelji['ime_ucitelja'] ;
        $id_ucitelja=$rowucitelji['id_ucitelja']; ?></td>
        <td><?php echo $rowucitelji['priimek_ucitelja']; ?></td>
        <td><?php echo $rowucitelji['email']; ?></td>
        <td><?php echo $rowucitelji['geslo']; ?></td>
        <td><form action="#" method="post">
        <input type="hidden" name="id_ucitelja" value="<?php echo $rowucitelji['id_ucitelja']; ?>">
        <input type="submit" name="izbris_ucitelja" value="Izbriši">
      </form></td>
      </tr>
    <?php
  } ?>
  
  <tr>
    <form action="#" method="post" onsubmit="preveri(event)">
        <?php

        $id_ucitelja=$id_ucitelja+1;
        ?>
        <input type="hidden" value="<?php echo $id_ucitelja; ?>" name="id_ucitelja">
        <td> <input type="text" name="ime_ucitelja"> </td>
        <td> <input type="text" name="priimek_ucitelja"> </td>
        <td> <input type="email" name="email"> </td>
        <td><input type="text" name="geslo"></td>
        <td><input type="submit" name="dodaj_ucitelja" value="Dodaj"> </td>
        </form>
      </tr>
  </tbody>
  </table>
</div>


<script>
  function preveri(event) {
  
    var ime = document.getElementsByName('ime_ucitelja')[0].value;
    var priimek = document.getElementsByName('priimek_ucitelja')[0].value;
    var email = document.getElementsByName('email')[0].value;
    var geslo = document.getElementsByName('geslo')[0].value;

    if (ime === "" || priimek === "" || email === "" || geslo === "") {
      alert("Vsa polja morajo biti izpolnjena!");
      event.preventDefault(); 
    }
  }
</script>







