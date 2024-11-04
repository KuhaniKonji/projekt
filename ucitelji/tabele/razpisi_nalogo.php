<form action="#" method="post">
    <label>Naslov:</label><br>
    <input style="margin-bottom: 20px;" type="text" name="naslov"><br>
    <label>Predmet:</label><br>
         <select style="margin-bottom: 20px;" name="value">
          <?php
          $sql_razpis = "SELECT * FROM ucitelj_predmet, predmeti where id_ucitelja='$id_ucitelja' and predmeti.id_predmeta=ucitelj_predmet.id_predmeta";
      $result_razpis = mysqli_query($con, $sql_razpis);
      while ($row_razpis=mysqli_fetch_array($result_razpis))
      {
        $id_predmeta=$row_razpis['id_predmeta'];
        echo "<option value='$id_predmeta'>" . $row_razpis['ime_predmeta'] . " " . $row_razpis['letnik'] . "</option>";

      }



           ?>
         </select><br>
    <label >Navodilo:</label><br>
    <input style="margin-bottom: 20px;" type="text" name="navodilo"><br>
    <label>Rok oddaje:</label><br>
    <input style="margin-bottom: 20px;" type="date" name="rok_za_oddajo" required><br>
    <input style="margin-top: 30px;" type="submit" name="razpis" value="Razpiši nalogo"><br>

</form>
